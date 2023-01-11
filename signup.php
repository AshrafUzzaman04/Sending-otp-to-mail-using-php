<?php 
 include_once("header.php");
 include_once("fu.php");
?>

<!-- header -->
    <header>
      <a class="img-div" href="./">
        <img src="./images/familysearch-tree.dc22204d2135c739.svg" alt="" />
      </a>
    </header>
    <section class="form-body container mx-auto">
      <div
        class="row mx-auto d-flex justify-content-between align-items-center"
      >
      

<?php  if (isset($_GET['re'])) { ?>
        <!-- profile section -->
        <div class="profile-section col-12 col-lg-6">
          <div class="card" style="max-width: 300px">
            <div class="card-img">
              <img
                src="./images/blank-profile-female.png"
                alt=""
                class="img-fluid"
              />
            </div>
<div class="card-body text-center">
    <span class="text-center fw-medium text-success d-block">Name</span>
     <span class="text-center fw-medium text-dark" >example@gmail.com</span>
</div>
          </div>
        </div>
<?php } ?>
        <!-- form section -->
        <div
          class="form-section col-12 col-lg-6 bg-white p-4 mx-auto "
          style="border-radius: 12px; max-width: 450px"
        >
          <h3 class="fw-medium text-success text-center">Create an Account</h3>
          <hr class="col-8 mx-auto my-0" style="border: 1px solid green" />
          <br />
          <form action="" autocomplete="off">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="first_name" class="form-control" />
                  <label class="form-label" for="form3Example1">First name</label >
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="last_name" class="form-control" />
                  <label class="form-label" for="form3Example2"
                    >Last name</label
                  >
                </div>
              </div>
            </div>

            <!-- date of birth -->
            <span style="color: rgb(160, 160, 160)">Date of birth</span>
            <div class="row mb-4 birth-date">
              <div class="col">
                <select class="form-select" id="month" aria-label="Default select example">
                  <option value="0">Month</option>
                  <option value="01">Jan</option>
                  <option value="02">Feb</option>
                  <option value="03">Mar</option>
                  <option value="04">Apr</option>
                  <option value="05">May</option>
                  <option value="06">Jun</option>
                  <option value="07">Jul</option>
                  <option value="08">Aug</option>
                  <option value="09">Sep</option>
                  <option value="10">Oct</option>
                  <option value="11">Nov</option>
                  <option value="12">Dec</option>
                </select>
              </div>
              <div class="col">
                <select class="form-select" id="day" aria-label="Default select example">
                  <option value="0">Day</option>
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
              </div>
              <div class="col">
                <select class="form-select" id="year" aria-label="Default select example">
                  <option value="0">Year</option>
                  <option value="2023">2023</option>
                  <option value="2022">2022</option>
                  <option value="2021">2021</option>
                  <option value="2020">2020</option>
                  <option value="2019">2019</option>
                  <option value="2018">2018</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                  <option value="1989">1989</option>
                  <option value="1988">1988</option>
                  <option value="1987">1987</option>
                  <option value="1986">1986</option>
                  <option value="1985">1985</option>
                  <option value="1984">1984</option>
                  <option value="1983">1983</option>
                  <option value="1982">1982</option>
                  <option value="1981">1981</option>
                  <option value="1980">1980</option>
                  <option value="1979">1979</option>
                  <option value="1978">1978</option>
                  <option value="1977">1977</option>
                  <option value="1976">1976</option>
                  <option value="1975">1975</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1974">1974</option>
                  <option value="1973">1973</option>
                  <option value="1972">1972</option>
                  <option value="1971">1971</option>
                  <option value="1970">1970</option>
                  <option value="1969">1969</option>
                  <option value="1968">1968</option>
                  <option value="1967">1967</option>
                  <option value="1966">1966</option>
                  <option value="1965">1965</option>
                  <option value="1964">1964</option>
                  <option value="1963">1963</option>
                  <option value="1962">1962</option>
                  <option value="1961">1961</option>
                  <option value="1960">1960</option>
                  <option value="1959">1959</option>
                  <option value="1958">1958</option>
                  <option value="1957">1957</option>
                  <option value="1956">1956</option>
                  <option value="1955">1955</option>
                  <option value="1954">1954</option>
                  <option value="1953">1953</option>
                  <option value="1952">1952</option>
                  <option value="1951">1951</option>
                  <option value="1950">1950</option>
                  <option value="1949">1949</option>
                  <option value="1948">1948</option>
                  <option value="1947">1947</option>
                  <option value="1946">1946</option>
                  <option value="1945">1945</option>
                  <option value="1945">1945</option>
                  <option value="1944">1944</option>
                  <option value="1943">1943</option>
                  <option value="1942">1942</option>
                  <option value="1941">1941</option>
                  <option value="1940">1940</option>
                  <option value="1939">1939</option>
                  <option value="1938">1938</option>
                  <option value="1937">1937</option>
                  <option value="1936">1936</option>
                  <option value="1935">1935</option>
                  <option value="1934">1934</option>
                  <option value="1933">1933</option>
                  <option value="1932">1932</option>
                  <option value="1931">1931</option>
                  <option value="1930">1930</option>
                  <option value="1929">1929</option>
                  <option value="1928">1928</option>
                  <option value="1927">1927</option>
                  <option value="1926">1926</option>
                  <option value="1925">1925</option>
                  <option value="1924">1924</option>
                  <option value="1923">1923</option>
                  <option value="1922">1922</option>
                  <option value="1921">1921</option>
                  <option value="1920">1920</option>
                  <option value="1919">1919</option>
                  <option value="1918">1918</option>
                  <option value="1917">1917</option>
                  <option value="1916">1916</option>
                  <option value="1915">1915</option>
                  <option value="1914">1914</option>
                  <option value="1913">1913</option>
                  <option value="1912">1912</option>
                  <option value="1911">1911</option>
                  <option value="1910">1910</option>
                  <option value="1909">1909</option>
                  <option value="1908">1908</option>
                  <option value="1907">1907</option>
                  <option value="1906">1906</option>
                  <option value="1905">1905</option>
                  <option value="1904">1904</option>
                  <option value="1903">1903</option>
                  <option value="1902">1902</option>
                  <option value="1901">1901</option>
                  <option value="1900">1900</option>
                </select>
              </div>
            </div>

<div class="row mb-4 birth-date">
 <div class="col">
                <select class="form-select" id="gender" aria-label="Default select example">
                  <option value="0">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>

              </div>
            </div>

            <!-- address input -->
            <div class="form-outline mb-4">
              <input type="text" id="address" class="form-control" />
              <label class="form-label" for="address">Enter your address</label>
            </div>

            <!-- country/location input -->
            <div class="mb-4 autocomplete">
              <span style="color: rgb(160, 160, 160)">Country</span>
              <input id="myInput" type="text"class="form-control" style="border: 1px solid rgb(184, 184, 184)" name="myCountry" />
            </div>

            <!-- Username input -->
            <div class="form-outline mb-4">
              <input type="text" id="username" class="form-control" />
              <label class="form-label" for="username">Enter Username</label>
            </div>

            <!-- Phone input -->
            <div class="form-outline mb-4">
              <input type="text" id="number" class="form-control" />
              <label class="form-label" for="number">Enter Phone Number</label>
            </div>

            <!-- email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email" class="form-control" />
              <label class="form-label" for="email">Enter Email Address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-2">
              <input type="password" id="password" class="form-control" />
              <label class="form-label" for="password">Enter your password</label>
                  <ion-icon name="eye-outline" id="hide" onclick="toggle()" style="display: none"></ion-icon>
                  <ion-icon name="eye-off-outline" id="show" onclick="toggle()" ></ion-icon>
            </div>
              <span>I have an account. <a href="./signIn.php" class="text-success" style="font-weight: 600; text-decoration: underline;">Login.</a></span>

            <!-- Submit button -->
            <div>
        <button id="submit" class="btn btn-primary btn-block mt-4">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>


<?php 

include_once("footer.php");

?>
