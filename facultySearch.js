var CSEIyB = [
  "Mrs. Ismath Aijaz(Engineering Mathematics-II)",
  "Prof. Dr. Shaik Zameeruddin(Engineering Physics-II)",
  "Dr. Aneesa Ferdose(Engineering Chemistry-II)",
  "Mr. Ahmed(Object Orieted Programming using C++)",
  "Dr. Nirmala Rita Nair(Business Communication and Presentation",
  "Nausheen Bano(Basic Electrical Engineering)",
  "Mr. Syed Ilyas Mohiuddin(Engineering Physics Lab-II)",
  "Dr. Mohd. Abdul Gafoor(Engineering Physics Lab-II)",
  "Dr. Shaik  Kareem Ahmed(Engineering Physics Lab-II)",
  "Dr. MGV Satyanarayana(Engineering Chemistry Lab-II)",
  "Dr. Pragathi Jogi(Engineering Chemistry Lab-II)",
  "Dr. Sariah Sana(Engineering Chemistry Lab-II)",
  "K. Niraja(Computer Skills)",
  "Zainuddin Naveed(Computer Skills)",
  "T Anita(Communication Skills)",
  "Sher Muhammed Khan(Communication Skills)",
  "Manjusha(C++ Programming Lab)",
  "Mir Ahmed Ali(C++ Programming Lab)"
];

var CSEIyA = [
  "Mrs. Ismath Aijaz(Engineering Mathematics-II)",
  "Prof. Dr. Shaik Zameeruddin(Engineering Physics-II)",
  "Dr. Aneesa Ferdose(Engineering Chemistry-II)",
  "K. Manjusha(Object Orieted Programming using C++)",
  "Farha Shah(Business Communication and Presentation",
  "MD. Jaffar(Basic Electrical Engineering)",
  "Mr. Syed Ilyas Mohiuddin(Engineering Physics Lab-II)",
  "Dr. Mohd. Abdul Gafoor(Engineering Physics Lab-II)",
  "Mr. Rahim Ahmed(Engineering Physics Lab-II)",
  "Dr. V Shanthi(Engineering Chemistry Lab-II)",
  "Dr. Pragathi Jogi(Engineering Chemistry Lab-II)",
  "Dr. Y Arun Kumar(Engineering Chemistry Lab-II)",
  "Meer Arshad Ali(Computer Skills)",
  "Krishna Keerthi(Computer Skills)",
  "T Anita(Communication Skills)",
  "Sher Muhammed Khan(Communication Skills)",
  "Manjusha(C++ Programming Lab)",
  "Mir Ahmed Ali(C++ Programming Lab)"
];

var CSEIIyA = [
  "Mr. Syed Rawoof(Mathematics And Statistics)",
  "Mrs. S Shabeera Khader(Signals and System Analysis)",
  "Mrs. Krishna Keerthi(Computer Organization)",
  "Mr. Syed Akbar Hashmi(Object Programming Using Java)",
  "Mr. G Rajesham(Programming Languages)",
  "Mrs. K Sridevi(Micro Processor And Interfacing)",
  "Mr. Syed Akbar Hashmi(Java Programming Lab)",
  "Mrs. K Sridevi(Micro  Processor lab)",
  "Mr. J Srinivas(Mini Project lab)",
  "Mr. Ahmed Ali(Society Outreach Program)"
];

var CSEIIyB = [
  "Mr. Syed Rawoof(Mathematics And Statistics)",
  "Mrs. Kameka(Signals and System Analysis)",
  "Mrs. Krishna Keerthi(Computer Organization)",
  "Mr. Meer Arshad Ali(Object Programming Using Java)",
  "Mr. G Rajesham(Programming Languages)",
  "Mrs. Niraja(Micro Processor And Interfacing)",
  "Mr. Meer Arshad Ali(Java Programming lab)",
  "Mrs. Niraja(Micro  Processor lab)",
  "Mr. Raheem(Mini Project lab)",
  "Mr. Mohd Imran(Society Outreach Program)",
  "Mr. Mohd Nazeer(Society Outreach Program)"
];

var CSEIIIyA = [
  "Dr. Umar Farooq(Web Programming and services)",
  "Mr. Mohd Ahmed(Compiler Construction)",
  "Mr. Zainuddin Naveed(Design Algorithm and analysis)",
  "Mr. Saleem Khan(Object Oriented System Development)",
  "Mrs. Maniza Hijab(Computer Networks)",
  "Dr. Umar Farooq/(Web Programming)",
  "Mrs. Maniza Hijab(Computer Networks lab)",
  "Mr Saleem Khan(OOSD lab)",
  "Mr. G Rajesham(Compiler Construction lab)",
  "Mr. Zainuddin Naveed(Mini Project lab)"
];

var CSEIIIyB = [
  "Mr. Syed  Mohiuddin(Web Programming and services)",
  "Mr. Mohd Ahmed(Compiler Construction)",
  "Dr. Syed Shabbir Ahmed(Design Algorithm and Analysis)",
  "Mrs. Sayeda Ambareen Rana(Object Oriented System Development)",
  "Mr. Khaja Zahooruddin(Computer Networks)",
  "Mr. Syed  Mohiuddin(Web Programming)",
  "Mr. Khaja Zahooruddin( Computer Networks lab)",
  "Mrs. Sayeda Ambareen Rana(OOSD Lab)",
  "Mrs. Gouri R Patil(Compiler Construction lab)",
  "Mrs. Afreen Sultana(Mini Project lab)"
];

var CSEIVyA = [
  "Mr. Mohd Nazeer(Data Mining)",
  "Mr J Srinivas(Elective-II Software Quality Testing)",
  "Mr. Shabaz Hussain(Elective-III Information Retrieval System)",
  "Mr. Mohd Nazeer(Data Mining lab)"
];

var CSEIVyB = [
  "Mr. Mohd Imran(Data Mining)",
  "Mr Mohd sharuddin(Elective-II Software Quality Testing)",
  "Prof. K Manmohan Rao(Elective-III Information Retrieval System)",
  "Mr. Mohd Imran(Data Mining lab)"
];

var CSE = [];
CSE = CSEIyA.concat(
  CSEIyB,
  CSEIIyA,
  CSEIIyB,
  CSEIIIyA,
  CSEIIIyB,
  CSEIVyA,
  CSEIVyB
);


window.onload=function(){

   console.log(CSE.unique());
  displayFaculties(CSE.unique());

   var elements = document.getElementsByTagName("a");
   for (var i = 0, len = elements.length; i < len; i++) {
     elements[i].onclick = function() {
       localStorage["facultyName"]=this.innerText;
     };
   }
  };

function displayFaculties(classYearSection)
{
    
    str="";
    for(var i=0;i<classYearSection.length;i++)
    {
        str+="<li class='facname'><b><a class='link' href='facultyReport.php?facName="+classYearSection[i]+"'>"+classYearSection[i]+"</a></li>"
        console.log(str);
    }
    var facultylist = document.getElementById("facultylist");
                      
    // console.log(facultylist);
    document.getElementById("facultylist").innerHTML = str;
    
}
Array.prototype.unique = function() {
  return this.filter(function(value, index, self) {
    return self.indexOf(value) === index;
  });
};

function searchFaculty()
{
  document.getElementById("facultylist").innerHTML = "";
  
  filterFaculty(CSE.unique());
  
}
function filterFaculty(classYearSection) {
  var facultySearchBar = document.getElementById("facultySearchBar");
  var substring = facultySearchBar.value;
  str = "";
  for (var i = 0; i < classYearSection.length; i++) {
    var string = classYearSection[i];
    if (string.indexOf(substring) !== -1) {
      str += "<li class='facname'><a href='facultyReport.php?facName=" + classYearSection[i] + "'>" + classYearSection[i] + "</a></li>";
    }
    
  }

  document.getElementById("facultylist").innerHTML = "";
  document.getElementById("facultylist").innerHTML = str;
  var elements = document.getElementsByTagName("a");
  for (var i = 0, len = elements.length; i < len; i++) {
    elements[i].onclick = function() {
      localStorage["facultyName"] = this.innerText;
    };
  }
}
