---
title: 'How to fix vagrant after a user account change'
date: '2016-09-27 16:24'
---

Just in case someone runs into it again. Since it was annoying to find this and someone else might need it sometime. If your user account changes while using vagrant (on mac), there are three things you need to do:

  - Find your new user and group id by running the command `id`.
  - Update the `.vagrant/machines/default/virtualbox/creator_uid` file in your project directory with your new user id.
  - Modify your `/etc/exports` file to contain your new user and group id under -mapall in the format [user_id]:[group_id].