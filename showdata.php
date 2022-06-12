<?php
require_once 'conn.php';
$sql = "SELECT * FROM trys";
$result = $db->query($sql);
$i = 0;
while ($data = $result->fetch_array()) {
    $i++;
    if ($data > 0){
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $number = $data['number'];
        echo "<tr>
        <td> $i </td>
        <td> $name </td>
        <td> $email </td>
        <td> $number </td>
        <td class='d-flex'>
            <a class='mr-2 btn btn-primary' href='edit.php?id= $id '>Update</a>
            <form action='delete.php' method='POST'>
                <input type='hidden' name='id' value=" . $id . ">
                <button type='submit' class='btn btn-danger mr-2'>Delete</button>
            </form>
        </td>
    </tr>";
    }
    else{
        echo "<tr>
        <td colspan='5' class='text-center'>No Data Found</td>
    </tr>";
    }
}
?>