<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">To Do List</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<center>
				<form method="post" class="form-inline" action="add_task.php">
					<input type="text" class="form-control" name="task" required/>
					<button class="btn btn-primary form-control" name="submit">Thêm công việc</button>
				</form>
			</center>
		</div>
		<br /><br /><br />
		<table class="table">
			<thead>
				<tr>
					<th>STT</th>
					<th>Công việc</th>
					<th>Trạng thái</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php
					require 'connection.php';
					$query = $conn->query("SELECT * FROM `todolist`");
					$count = 1;
					while($fetch = $query->fetch_array()){
				?>
				<tr>
					<td><?php echo $count++?></td>
					<td><?php echo $fetch['task']?></td>
					<td><?php echo $fetch['status']?></td>
					<td colspan="2">
							<?php
								if($fetch['status'] != "Đã làm"){
								echo
										'<a href="update_task.php?task_id='.$fetch['id'].'" class="btn btn-success"><span>Cập nhật</span></a>';
								}
							?>
							 <a href="delete_task.php?task_id=<?php echo $fetch['id']?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa công việc này không?');"><span>Xóa</span></a>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>