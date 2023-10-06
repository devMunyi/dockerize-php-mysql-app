<?php 

include_once './conn.inc';

$sql = 'SELECT * FROM users';
$result = $conn->query($sql);

if($result) {
    if ($result = $conn->query($sql)) {
        while ($data = $result->fetch_object()) {
            $users[] = $data;
        }
    }
    
    if(count($users) > 0){
        foreach ($users as $user) {
            echo "<br>";
            echo $user->username . " " . $user->password;
            echo "<br>";
        }
    }
}else {
    echo "0 results";
}

?>