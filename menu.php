<?php
include('config.php');

?>

<!--<form method="post">
    <label>DishName:</label>
    <input type="text" name="name"><br>
    <label>Price:</label>
    <input type="text" name="price"><br>
    <label>DishType:</label>
    <input type="text" name="type"><br>
   
    
    <button type="submit" name="submit">Submit</button>

</form>-->


<?php
/*if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $tax = $price/11.07;
    $fee = $price/4.82;
    echo $tax;
    $insert = $conn->prepare("INSERT into menu(Name,Price,Tax,Type,ConvenienceFee) values(?,?,?,?,?)");
    $insert->bind_param('sssss',$name,$price,$tax,$type,$fee);
    if($insert->execute() == true){
        echo "inserted";
    }
    else{
        echo "failed to insert data";
    }
}*/
?>

<?php
               $dishes = "SELECT Id,Name,Price from menu where Type='soups'";
               $soups = $conn->query($dishes);
               if($soups->num_rows>0){
                while($row = $soups->fetch_assoc()) {
                    echo $row['Price'];
                   echo "greater";
                }
               }
               else{
                   echo "does not exist";
               }
               ?>