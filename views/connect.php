<?php
                $conn = mysqli_connect("localhost", "root", "", "test") or die("ERROR");
                mysqli_set_charset($conn, "utf8");

                $query = mysqli_query($conn,"SELECT * FROM user JOIN resident on(user.username = resident.room_id) WHERE user.id = ".$_SESSION['id']);
                $row = $query->fetch_assoc();
                $building = $row["building"];
                $room = $row["room"];                                  