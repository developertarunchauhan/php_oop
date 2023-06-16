<?php

/**
 * Creating connection to DB
 */
$conn = mysqli_connect('127.0.0.1:3308', 'root', 'bs09Btcs183@', 'sheet_db') or die("Connection Failed");

/**
 * Getting data from DB
 */
$sql = "select * from sheets";

$results = mysqli_query($conn, $sql) or die("Query Error");
$output = '';

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        $output .= '
                <tr>
                    <th scope="row">' . $row["id"] . '</th>
                    <td>' . $row["first_name"] . '</td>
                    <td>' . $row["email"] . '</td>
                    <td>' . $row["phone"] . '</td>
                </tr>
        ';
    }
    mysqli_close($conn);

    echo $output;
} else {
    echo "No record found";
}
