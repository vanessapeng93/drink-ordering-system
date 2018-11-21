<?php  
 $connect = mysqli_connect("localhost", "root", "", "chat");  
 $output = '';  
 $sql = "SELECT * FROM `orders` WHERE `status` = 'pending' ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
					 <th width="20%">User ID</th>  
					 <th width="20%">Username</th>  
					 <th width="20%">Date</th>  
                     <th width="20%">Shipping Address</th>  
                     <th width="20%">Total Price</th>  
					 <th width="20%">Status</th> 
					 <th width="20%">Approve</th>  					 
                     <th width="20%">Paid</th>  
					 <th width="10%">Add/Delete</th>  
					 <th width="10%">Action</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM orders LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
					 <td class="user_id" data-id1="'.$row["id"].'" contenteditable="true">'.$row["user_id"].'</td>  
                     <td class="username" data-id2="'.$row["id"].'" contenteditable="true">'.$row["username"].'</td> 
                     <td class="date" data-id3="'.$row["id"].'" contenteditable="true">'.$row["date"].'</td>  
                     <td class="shipping_address" data-id4="'.$row["id"].'" contenteditable="true">'.$row["shipping_address"].'</td> 
					 <td class="total_price" data-id5="'.$row["id"].'" contenteditable="true">'.$row["total_price"].'</td>  
                     <td class="status" data-id6="'.$row["id"].'" contenteditable="true">'.$row["status"].'</td> 			
					 <td class="approve" data-id7="'.$row["id"].'" contenteditable="true">'.$row["approve"].'</td>  
                     <td class="paid" data-id8="'.$row["id"].'" contenteditable="true">'.$row["paid"].'</td> 					 					 
                     <td><button type="button" name="delete_btn" data-id9="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
					 <td><button type="button" name="approve_btn" data-id10="'.$row["id"].'" class="btn btn-xs btn-success btn_approve">Approve</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
				<td id="user_id" contenteditable="true"></td>  
                <td id="username" contenteditable="true"></td>  
                <td id="date" contenteditable="true"></td>  
                <td id="shipping_address" contenteditable="true"></td>  
				<td id="total_price" contenteditable="true"></td>  
                <td id="status" contenteditable="true"></td>  
				<td id="approve" contenteditable="true"></td>  
				<td id="paid" contenteditable="true"></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
				
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
				<td id="user_id" contenteditable="true"></td>  
                <td id="username" contenteditable="true"></td>  
                <td id="date" contenteditable="true"></td>  
                <td id="shipping_address" contenteditable="true"></td>  
				<td id="total_price" contenteditable="true"></td>  
                <td id="status" contenteditable="true"></td>  
				<td id="approve" contenteditable="true"></td>  
				<td id="paid" contenteditable="true"></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
					<td></td> 
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>