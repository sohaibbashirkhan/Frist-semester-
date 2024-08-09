<table>
   <tr class="name">
    <td>Name :</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr class="message">
    <td>Vaccination :</td>
    <td><input type="text" name="message" required></td>
   </tr>
   
   <tr class="gender">
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
    </td>
   </tr>

   <br>
   <br>

   <tr class="email">
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 

   <br>

   <tr class="age">
    <td>Age :</td>
    <td>
     <input type="phone" name="age" required>
     </tr>
     <tr class="weight">
     <td>Weight :</td>
    <td>
    
     <input type="number" name="weight" required>
     </tr>
     

    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="submit"></td>
   </tr>
  </table>
 </form>


























 

 <div class="col-lg-8 mt-5 mt-lg-0">
         <form action="#" method="POST" enctype="multipart/form-data" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>


      <?php
if(isset($_POST["submit"])){
    // error_reporting(0);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    
    
    


    $conn = mysqli_connect("localhost", "root", "", "medilab");         //hostname username password databasename
    if (!$conn) {
        echo "connection refuse";
    }

    // $query = "insert into teachers values (null,'$Name',$Expertise,'$Experience','$Picture')";
    $query = "INSERT INTO `messsage`(`id`, `name`, `email`, `subject`, `message`) VALUES ('null','$name','$email','$subject','$message')";
    $q = mysqli_query($conn, $query);
    if (!$q) {
        echo "query not exectired";
    } else {
        echo "query sucess";
        
    }
 
  }
?>





    </section><!-- End Contact Section -->

 
