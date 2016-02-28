<?php
session_start();
header('Content-encoding: utf-8');
if (isset($_POST['regex']) || isset($_POST['source'])) {
	$_SESSION['regex'] = $_POST['regex'];
	$_SESSION['source'] = $_POST['source'];
	if (substr($_POST['regex'],0,1) != '/') {
		$regex = '/'.$_POST['regex'].'/';
	} else {
		$regex = $_POST['regex'];
	}
	preg_match_all($regex, $_POST['source'], $matches);
	$text = preg_replace($regex, '<span class="match">$0</span>', $_POST['source']);

	$res2 = "<dl>";

	foreach($matches as $match=>$value) {
		if ($match === 0) $matchname = "Full Match"; else $matchname = $match;
		$res2 .= '<div class="matchdesc" id="match_'.$match.'"><dt>'.$matchname.'</dt><dd>';
		if ($value[0] != '') { $res2 .= $value[0]; } else { $res2 .= "[none]"; }
		$res2 .= "</dd></div>";
	}
	$res2 .= "</dl>";
	array_reverse($matches);
	foreach($matches as $match=>$value) {
		$text = str_replace($value[0], '<span class="match" title="'.$match.'">'.$value[0].'</span>', $text);
	}
	$res = nl2br($text);
	echo json_encode(array('res'=>$res, 'res2'=>$res2));
	die();
}

?>
<!DOCTYPE html>
<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
		<script src="regex-colorizer.js"></script>
		<style>
			.match {
				background-color:green;
			}
			.match .match {
				background-color:yellowgreen;
			}
			.match .match .match{
				background-color:greenyellow;
			}
			.match .match .match .match {
				background-color:yellow;
			}
			.match.hover {
				color:darkred;
			}
			#result2 .hover {
				color:orange;
			}
			#result2 .main {
				color:red;
			}
		</style>
	</head>
	<body>
		<div class="row-fluid" style="padding:20px;">
			<div>
				Regex
			</div>
			<div>
				<textarea id="regex" name="regex" class="span12" style="font-size:20px;"><?=$_SESSION['regex']?></textarea>

			</div>
			<div>Scratch</div>
			<div><textarea class="span12"></textarea></div>
		</div>
		<div class="row-fluid">
			<div class="span4" style="padding:20px;">
				<div>
					<textarea id="source" name="source" class="span12" style="height:600px;"><?=$_SESSION['source']?></textarea>
				</div>
			</div>
			<div id="result" class="span5" style="padding:20px;overflow:auto;height:600px;">
				Results
			</div>
			<div id="result2" class="span3" style="padding:20px;overflow:auto;height:600px;">
				Specific matches
			</div>
		</div>
		<script>
			$('#regex, #source').keyup(function() {
				$('.regex').html($('#regex').val());
				RegexColorizer.colorizeAll();
				$('.err').tooltip();
				$('#result').html('<i class="icon-spinner icon-spin icon-large"></i>')
				$.ajax('', {
					method: 'post',
					data: {
						regex: $("#regex").val(),
						source: $("#source").val()
					},
					dataType: 'json',
					success: function(data) {
						$('#result').html(data.res);
						$('#result2').html(data.res2);
						if ($(".match").length > 0) {
							$('#result').animate({
								scrollTop: $(".match").first().offset().top - 200
							}, 200);
						}
					}
				})
			});
			$(document).on('mouseover', '.match', function(e) {
				e.stopPropagation();
				$(this).addClass('hover');
				$('.matchdesc').removeClass('hover');
				$(this).parents('.match').each(function() {
					$('#match_'+$(this).attr('title')).addClass('hover');
				});
				$('#match_'+$(this).attr('title')).addClass('hover').addClass('main');
			});
			$(document).on('mouseout', '.match', function(e) {
				e.stopPropagation();
				$(this).removeClass('hover');
				$('.matchdesc').removeClass('hover').removeClass('main');
			});
			// Don't run this line if you provide your own stylesheet
			RegexColorizer.addStyleSheet();
			RegexColorizer.colorizeAll();
			$('#regex').keyup();
		</script>
	</body>
</html>