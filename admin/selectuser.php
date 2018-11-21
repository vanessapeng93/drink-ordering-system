<?php  
 $connect = mysqli_connect("localhost", "root", "", "chat");  
 $output = '';  
 $sql = "SELECT * FROM users ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
					           <th width="20%">Username</th>  
					           <th width="20%">Password</th>  
                     <th width="20%">Name</th>   
          					 <th width="20%">Mobile Number</th> 
          					 <th width="20%">Email</th>  					 
                     <th width="10%">Add/Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM users LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
					 <td class="username" data-id1="'.$row["id"].'" contenteditable="true">'.$row["username"].'</td>  
                     <td class="password" data-id2="'.$row["id"].'" contenteditable="true">'.$row["password"].'</td> 
                     <td class="name" data-id3="'.$row["id"].'" contenteditable="true">'.$row["name"].'</td>  
					 <td class="hp" data-id5="'.$row["id"].'" contenteditable="true">'.$row["hp"].'</td>  
                     <td class="email" data-id6="'.$row["id"].'" contenteditable="true">'.$row["email"].'</td> 					 
                     <td><button type="button" name="delete_btn" data-id7="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
				<td id="username" contenteditable="true"></td>  
                <td id="password" contenteditable="true"></td>  
                <td id="name" contenteditable="true"></td>   
				        <td id="hp" contenteditable="true"></td>  
                <td id="email" contenteditable="true"></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="username" contenteditable="true"></td>  
					<td id="password" contenteditable="true"></td>  
					<td id="name" contenteditable="true"></td>   
					<td id="hp" contenteditable="true"></td>  
					<td id="email" contenteditable="true"></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>