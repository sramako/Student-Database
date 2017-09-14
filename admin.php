<html>
<style>
input[type=text], select {
	color: grey;
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 70%;
    background-color: #0f213f;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
</style>
	<?php $dbconn = pg_connect("host=127.0.0.1 dbname=project user=postgres password=1234")
    or die('Could not connect: ' . pg_last_error());
    
    $admin= $_POST['admin'];


    if($admin=='admin1'){
            //echo "<h2>You're now logged in as Data Admin</h2>" ;
           

 
    if($_POST['insert']){
                $query=$_POST['insert'];
                $res=pg_query($query);
                if($res){?>
                <script>
                    alert("Data inserted Successfully !!");
                </script>
                <?php
                }
            }
            else if($_POST['update']){
                $query=$_POST['update'];
                $res=pg_query($query);
                if($res){?>
                   <script> alert("Data updated Successfully !!");</script>
                <?php}
             }
            else if($_POST['delete']){
                $query=$_POST['delete'];
                $res=pg_query($query);
                if($res){?>

                    <script>alert("Data deleted Successfully !!");</script>
                <?php }

            }
    }
            else{
   echo 'Authentication Failed';
				exit;
   }
            ?>

<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>PES University</h2>
  <p><?php if($admin=='admin1')echo "You're now logged in as Admin	"; ?></p>
</div>

<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onclick="opentab('Insert')">Insert</button>
  <button class="w3-bar-item w3-button" onclick="opentab('Update')">Update</button>
  <button class="w3-bar-item w3-button" onclick="opentab('Delete')">Delete</button>
</div>

<div id="Insert" class="w3-container tab">
  <h2>INSERT VALUES</h2>
  <p>Insert new data into database.</p><hr>
  <div>
		<form action='insert.php' method='post'>
			<label for="fname"><b>Relation Student </b></label><br>
			<input type= 'text' name='insert' placeholder='insert into student (usn,name,dept_name ,year ,age ,semester) values '>
			<br><label for="fname"><b>Relation Marks </b></label><br>
			<input type= 'text'	name='insert_marks' placeholder='insert into marks (usn,sub1,sub2,sub3,sub4,sub5,test,semester) values '>
			<input type='text' name='admin' value='admin1' style="display:none"><br>
			<input type='submit'></input>
		</form>
	
  </div>
</div>

<div id="Update" class="w3-container tab" style="display:none">
  <h2>UPDATE VALUES</h2>
  <p>Update can update the marks of a student.</p> <hr>
   <div>
    <form action='update.php' method='post'>
              
              <label for="fname"><b>Relation Student </b></label><br>
		<input type='text' name='update' placeholder='update student set column '><br>
              <input type='text' name='admin' value='admin1' style="display:none"><br>
            <input type='submit'></input>
            </form>
  </div>
</div>

<div id="Delete" class="w3-container tab" style="display:none">
	 <h2>DELETE VALUES</h2>
	<p>Delete a student.</p> <hr>
   <div>
    <form action='delete.php' method='post'>
			<label for="fname"><b>Relation Student </b></label><br>
              <input type='text' name='delete' placeholder='delete from student'>
            <input type='text' name='admin' value='admin1' style="display:none"><br>
            <input type='submit'></input>
            </form>
  </div>
</div>

<script>
function opentab(tabName) {
    var i;
    var x = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(tabName).style.display = "block";  
}
</script>

</body>
</html>
