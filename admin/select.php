<?php  
 $connect = mysqli_connect("localhost", "root", "", "chat");  
 $output = '';  
 $sql = "SELECT * FROM menu ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="20%">Name of Drink</th>  
                     <th width="20%">Description</th> 
					 <th width="10%">Category</th> 
					 <th width="10%">Price</th> 
					
					 <th width="10%">Available Quantity</th> 
					 
                     <th width="5%">Add/Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 100)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM menu LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name" data-id1="'.$row["id"].'" contenteditable="true">'.$row["name"].'</td>  
                     <td class="description" data-id2="'.$row["id"].'" contenteditable="true">'.$row["description"].'</td> 
					 <td class="category" data-id3="'.$row["id"].'">'.$row["category"].'</td>  
                     <td class="price" data-id4="'.$row["id"].'" contenteditable="true">'.$row["price"].'</td>	
			
                     <td class="quantity" data-id6="'.$row["id"].'" contenteditable="true">'.$row["quantity"].'</td>					 
                     <td><button type="button" name="delete_btn" data-id7="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable="true"></td>  
                <td id="description" contenteditable="true"></td>  
				<td id="category" contenteditable="true">
				<select>
					   <option value="volvo">chocolate</option>
  
					 </select></td>  
                <td id="price" contenteditable="true"></td>  
				
                <td id="quantity" contenteditable="true"></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="name" contenteditable="true"></td>  
					<td id="description" contenteditable="true"></td>  
					<td id="category" contenteditable="true">
					<select>
					   <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
					 </select>
					 </td>  
					<td id="price" contenteditable="true"></td>  
				 
					<td id="quantity" contenteditable="true"></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>