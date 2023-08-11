
               <?php
               //using html table tag in php 
//this code is inside html <body> tag
                   class tab
                           {
                            function fun()
                                 {
                                  $str="yash";$str2="ashish";$str3="chaman";
                                  echo "<table border=1>
                                  <tr>
                                  <td>$str</td>
                                  <td>$str2</td>
                                  <td>$str3</td>
                                  </tr>
                                        </table>";
                                 }
                           }
                    $obj=new tab();
                    $obj->fun();
                ?>
 
