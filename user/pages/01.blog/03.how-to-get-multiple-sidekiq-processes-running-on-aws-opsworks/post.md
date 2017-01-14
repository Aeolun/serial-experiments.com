---
title: 'How to get multiple Sidekiq processes running on AWS OpsWorks'
date: '2016-12-20 16:23'
---

I’ve spent half a day trying to do this thing, so I figured I’d save other people the trouble, and write up something about it, as well as save myself the trouble if I want to do the same thing a few years down the road.

The reason I needed this was that I wanted to spread out jobs across workers, and not have any of those workers start on the jobs that were assigned to the others after they were done. So priorities would’t work.

OpsWorks doesn’t seem to have a facility to do this, they always start the single sidekiq worker you define in config/sidekiq.yml . No custom JSON is available to do it by default.
The solution is to add the https://github.com/drakerlabs/opsworks_sidekiq custom cookbook. This will allow you to define additional sets of workers for your application in the custom JSON that you can define on your application Layer.

Like this:

    {
      "sidekiq": {
        "pi_crawler": {
          "default": {
            "config" : {
              "concurrency": 4,
              "queues": [
                "default"
              ]
            }
          },
          "high_priority": {
            "config": {
              "concurrency": 4,
              "queues": [
                "high_priority"
              ]
            }
          }
        }
      }
    }
    
When you deploy your app afterwards, the cookbook will start these two additional workers. Unfortunately it looks like the default cookbook still starts the original worker, so could use this to only specify any additional workers you’d want, and use the default worker for your normal tasks.