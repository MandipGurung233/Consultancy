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
                <h1 class="mt-5" style="color: white;font-size:35px;">Prepare for JLPT </h1>
               
                <h1 id="bann"><a href="/">Home</a>><a href="{{route('jlpt')}}">JLPT</a></h1>
            </div>
            </div>
        </div>   
    </div>
</div>


<div class="container">
    <div class="row  align-items-center pt-5">
        <div class="col-md-10" style="float:right">
            <div>
                <h4 style="font-weight: bold;">What is JLPT ? </h4>
                <p>
                    In order to assess and certify Japanese language proficiency for non-native speakers, the Japanese-Language Proficiency Test, often known as the JLPT, covers language knowledge, reading ability, and listening ability. The test is administered once a year in other regions and twice a year in Japan and a few other nations (on the first Sunday of July and December) (either on the first Sunday of December or July depending on region). There are five levels in the JLPT exam. The test had four levels up until 2009, with level 1 being the highest certification and level 4 being the lowest. JLPT certificates never lose their validity or expire.
                </p>
            </div>
            <br>
            <div>
           
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Level</th>
                        <th scope="col">An outline of the linguistic proficiency needed at each level</th>
                   
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>  <span style="font-weight: bold;"><br>NAT1</span></td>
                        <td><br>
                            <span style="font-weight: bold;">Advanced Level :</span> The ability to understand Japanese used in a variety of circumstances. <br><br>
                            <span style="font-weight: bold;">Reading : <br></span>
                            One may read texts on a variety of subjects, such as newspaper editorials and critiques, that are logically complicated or abstract and understand both their structures and contents. One is also able to read books with in-depth content on a variety of subjects, follow their narratives, and fully comprehend the authors' intentions. <br><br>
                            <span style="font-weight: bold;">Listening : <br></span>
                            One is able to follow the ideas and fully understand the contents of orally presented materials such as coherent discussions, news stories, and lectures that are spoken at a natural speed in a wide range of contexts. One is also able to comprehend the specifics of the things that are being provided, such as the connections between the parties involved, the logical frameworks, and the key ideas.
                            <br>
                        </td>
                      </tr>

                      <tr>
                        <td>  <span style="font-weight: bold;"><br>NAT2</span></td>
                        <td><br>
                            <span style="font-weight: bold;">Pre-Advanced Level :</span> The ability to understand Japanese used in everyday situations, and a variety of circumstances to a certain degree.<br><br>
                            <span style="font-weight: bold;">Reading : <br></span>
                            One is able to read and understand things that are written clearly on a variety of subjects, such as newspaper and magazine articles and commentary as well as straightforward critiques. One can also read written materials on general issues, follow their storylines, and comprehend the authors' intentions.<br><br>
                            <span style="font-weight: bold;">Listening : <br></span>
                            One is able to follow the ideas and understand the contents of orally presented items, such as cohesive discussions and news broadcasts, spoken at a speed that is close to natural in both informal and formal settings. One is also able to comprehend the connections between those participating and the key ideas of the materials that are being discussed.
                            <br>
                        </td>
                      </tr>

                      <tr>
                        <td>  <span style="font-weight: bold;"><br>NAT3</span></td>
                        <td><br>
                            <span style="font-weight: bold;">Intermediate Level:</span> The ability to understand Japanese used in everyday situations to a certain degree. <br><br>
                            <span style="font-weight: bold;">Reading : <br></span>
                            Written resources having specific contents relating to common issues can be read and understood. One can also understand summaries of information, such as news headlines. Additionally, if some alternative terms are provided to enhance one's understanding, one is also able to read slightly challenging writings found in everyday circumstances and understand the essential aspects of the text.
                            <span style="font-weight: bold;">Listening : <br></span>
                            One is typically able to follow the contents of everyday conversations that are spoken at a pace that is close to natural and understand the relationships between the people involved.
                            <br>
                        </td>
                      </tr>

                      <tr>
                        <td>  <span style="font-weight: bold;"><br>NAT4</span></td>
                        <td><br>
                            <span style="font-weight: bold;">Elementary Level :</span> The ability to understand basic Japanese. <br><br>
                            <span style="font-weight: bold;">Reading : <br></span>
                            One can read and understand passages on familiar daily topics written in basic vocabulary and kanji. <br><br>
                            <span style="font-weight: bold;">Listening : <br></span>
                            One can listen and comprehend conversations encountered in daily life and generally follow their contents, provided that they are spoken slowly.<br>
                        </td>
                      </tr>

                      <tr>
                        <td>  <span style="font-weight: bold;"><br>NAT5</span></td>
                        <td><br>
                            <span style="font-weight: bold;">Basic Level :</span> The ability to understand some basic Japanese. <br><br>
                            <span style="font-weight: bold;">Reading : <br></span>
                            One can read and understand typical expressions and sentences written in hiragana, katakana, and basic kanji.<br><br>
                            <span style="font-weight: bold;">Listening : <br></span>
                            One can read and understand typical expressions and sentences written in hiragana, katakana, and basic kanji.
                           
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