<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<meta charset="utf-8">
<title>イベントリスト</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form>
				<div class="form-group">
					<label for="name" class="control-label">氏名</label>
					<input type="text" name="name" id="name" class="form-control" />
				</div>
				
				<div class="select-date">
					<?php foreach ($list as $value): ?>
					<div class="radio">
						<label class="control-label">
							<input type="radio" name="schedule" value="<?=$value['開始日時']?>" />
							<?=$value['開始日時']?> 開始 (会場: <?=$value['場所']?>)
						</label>
					</div>
					<?php endforeach; ?>
				</div>

				<div class="form-group">
					<input type="submit" value="Submit" class="btn btn-info btn-block" />
				</div>
			</form>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>