<span id="search-result">
  <h3>System Users</h3>
  <div id="subcontent">
      <table id="data-list">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Access Level</th>
          <th>Email</th>
        </tr>
  <?php
  $count = 1;
  $count = 1;
  if($user->list_users() != false){
  foreach($user->list_users() as $value){
    extract($value);

    if($user_access_level == 'Manager' || $user_access_level == 'Supervisor'){
    
  ?>
        <tr>
          <td><?php echo $count;?></td>
          <td><a href="index.php?page=settings&subpage=users&action=profile&id=<?php echo $user_id;?>"><?php echo $user_lastname.', '.$user_firstname;?></a></td>
          <td><?php echo $user_access;?></td>
          <td><?php echo $user_email;?></td>
        </tr>
  <?php
  $count++;
    }else if($user_id == $user_id_login){
      ?>
        <tr>
          <td><?php echo $count;?></td>
          <td><a href="index.php?page=settings&subpage=users&action=profile&id=<?php echo $user_id;?>"><?php echo $user_lastname.', '.$user_firstname;?></a></td>
          <td><?php echo $user_access;?></td>
          <td><?php echo $user_email;?></td>
        </tr>
  <?php
  $count++;
    }
  }
  }else{
    echo "No Record Found.";
  }
  ?>
      </table>
  </div>
</span>