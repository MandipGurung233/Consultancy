<!DOCTYPE html>
<html lang="en">
<head>
    <x-layouts.master/>
    <link rel="stylesheet" href="{{asset('css/test/jlpt.css')}}"> 
</head>
<body>
    <x-layouts.header/>
    <!--banner-->

<!--banner-->
<div class="header">     
    <div class="container">
        <div class="row justify-content-center slider-text align-items-center mt-6">
            <div class="col-md-6 col-lg-8 mt-10">
            <div class="text-center">
                <h1 class="mt-5" style="color: white;font-size:35px;">Prepare for SSW / JFT </h1>
               
                <h1 id="bann"><a href="/">Home</a>><a href="{{route('ssw')}}">SSW / JFT</a></h1>
            </div>
            </div>
        </div>   
    </div>
</div>


<div class="container">
    <div class="row  align-items-center pt-5">
        <div class="col-md-10" style="float:right">
            <div>
                <h4 style="font-weight: bold;">What is SSW ? </h4>
                <p>
                    Japan created the "Specified Skilled Worker (SSW)" status of residency in April 2019 to allow qualified professionals from other nations to work in specific Japanese industrial industries as workers who are prepared to take on occupations without prior training.
                </p>
            </div>
            <br>
            <div>
           
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">General Query</th>
                   
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>  <span style="font-weight: bold;"><br>Q1</span></td>
                        <td><br>
                            <span style="font-weight: bold;"> Features of SSW</span><br><br>
                            <p>
                                SSWs in Japan are required to be above 18 years old, in excellent health, possess the required job abilities, and speak Japanese well enough to begin working right away without additional training. A common test run by Japan will confirm knowledge and Japanese proficiency. The maximum total number of years you can work is five, however you are not allowed to bring your family. The main distinction between working in Japan and other residency statuses is a support system. From the moment you arrive in Japan until you depart for your home country, your company can provide you with a wide range of support for both work and life. <br> <br>
                                Another program, dubbed "Technical Intern Training," encourages participants to contribute to the global community by teaching others in their home countries how to use the knowledge and abilities they gained while receiving on-the-job training in Japan. Technical interns who successfully finish their training are eligible to change their status of residence to SSW in the same field without having to pass any occupational skill exams or Japanese proficiency tests.
                            </p>
                        </td>
                      </tr>

                      <tr>
                        <td>  <span style="font-weight: bold;"><br>Q2</span></td>
                        <td><br>
                            <span style="font-weight: bold;">Test needed to be taken for SSW</span><br><br>
                            <p>
                                Passing the "Japan Foundation Test for Basic Japanese <span style="font-weight: bold;">(JFT)</span> or obtaining the N4 certificate for the "Japanese Language Proficiency Test (JLPT)" are prerequisites for obtaining a "Specified Skilled Worker" status of residence. JFT-Basic and JLPT are both administered both inside and outside of Japan.
                            </p>
                        </td>
                    </tr>  
                    </tbody>
                  </table>
                  <br><br>

            </div>
        </div>
    </div>
</div>



  
    <x-layouts.footer/>
</body>
</html>