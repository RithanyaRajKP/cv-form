<!DOCTYPE html>
<html>
  <head>
    <title>CV</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <style type="text/css">
      
      .button1 {
  background-color: #555555; 
  color: white;
  font-size: 20px;
  border: none;
  padding: 8px 10px;
  border-radius: 12px;
}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>CV Application Form</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                />
              </div>
              <div class="form-group">
                <label for="MobileNo">MobileNo</label>
                <input
                  type="text"
                  class="form-control"
                  id="MobileNo"
                  name="MobileNo"
                  pattern="[789][0-9]{9}"
                />
              </div>
               <div class="form-group">
                <label for="WhatsappNo">WhatsappNo</label>
                <input
                  type="text"
                  class="form-control"
                  id="WhatsappNo"
                  name="WhatsappNo"
                  pattern="[789][0-9]{9}"
                />
              </div>
              <div class="form-group">
                <label for="qualification">HIGHEST QUALIFICATION</label>
                <div>
                  <label for="BACHELORS" class="radio-inline"
                    ><input
                      type="radio"
                      name="qualification"
                      value="B"
                      id="BACHELORS"
                    />BACHELORS</label
                  >
                  <label for="MASTERS" class="radio-inline"
                    ><input
                      type="radio"
                      name="qualification"
                      value="M"
                      id="MASTERS"
                    />MASTERS</label
                  >
                  <label for="DOCTORATE" class="radio-inline"
                    ><input
                      type="radio"
                      name="qualification"
                      value="D"
                      id="DOCTORATE"
                    />DOCTORATE</label
                  >
                  <label for="ASSOCIATES" class="radio-inline"
                    ><input
                      type="radio"
                      name="qualification"
                      value="A"
                      id="ASSOCIATES" 
                    />ASSOCIATES</label
                  >
                  <label for="OTHERS" class="radio-inline"
                    ><input
                      type="radio"
                      name="qualification"
                      value="O"
                      id="OTHERS"
                    />OTHERS</label
                  >
                </div>
              </div>
              <div class="form-group">
               <label for="intern">Area Of Interest In Internship:</label>
                  <select name="intern" id="cars">
                    <option value="Selectt" disabled="">Select</option>
                    <option value="Web Development">Web Development</option>
                    <option value="HR">HR</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Finance">Finance  </option>
                  </select>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group">
                <label for="clg">college</label>
                <input
                  type="text"
                  class="form-control"
                  id="clg"
                  name="clg"
                />
              </div>
              <div class="form-group">
                <label for="refer">REFERENCE NAME</label>
                <input
                  type="text"
                  class="form-control"
                  id="er"
                  name="refer"
                />
              </div>


                            <div class="col-2">
                                <div class="input-group">
                                    <input type="file" id="myFile" name="filename">
                                </div>
                            </div>
                            <div class="col-2">
                                 <div class="input-group" style="padding-left: 200px;padding-bottom: 50px">
                                     <input type="submit" class="btn btn-primary" />
                                </div>
                            </div>
                        
            </form>
                        <div  style="padding-left: 430px;">
                                     <a href="index.php"><button class="button1">admin</button></a>
                                </div>

          </div>
        </div>
      </div>
  </body>
</html>
