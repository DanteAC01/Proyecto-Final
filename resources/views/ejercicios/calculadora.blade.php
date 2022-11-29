@extends('layout.base')
@section('titulo', 'Calculadora')
@section('cuerpo')
<br><br><br><br>
   <head>
       <script languaje="JavaScript">
           <!-- Aqui se oculta el script a los visualizadores que no soportan JavaScript>
           //Keep track of wherther we just computed display.value
           var computed = false
           function pushStack(form){
           form.stack.value = form.display.value
           form.display.value = 0
           }
           //
           //define a fucntion to add a new character to the display
           //
           function addChar(input, character){
               //auto-push the stack if the last value was computed 
               if(computed){
                   pushStack(input.form)
                   computed = false
               }
               //make sure input.value is a string 
               if(input.value == null ||input.value == "0")
                   input.value = character 
               else
                   input.value += character
           }
           function deleteChar(input){
               input.value = input.value.substring(0,input.value.length-1)
           }
   function add(form){
       form.display.value = parseFloat(form.stack.value)
 + parseFloat(form.display.value)
   computed = true
   }
   function subtract(form){
       form.display.value = form.stack.value - form.display.value
       computed = true
   }
   function multiply(form){
       form.display.value = form.stack.value * form.display.value
       computed = true
   }
   function divide(form){
       var divisor = parseFloat(form.display.value)
       if (divisor == 0){
           alert("don't divide by zero, pal...");
           return
       }
       form.display.value = form.stack.value / divisor
       computed = true
   }
   function changeSing(input){
       //could use input.value = 0 - input.value, but let's show off substring
       if(input.value.substring(0,1)=="-")
           input.value = input.value.substring(1, input.value.length)
       else 
           input.value= "-" + input.value
   }
<!-- done hiding form old browsers -->
</script>
   </head>
<style>
	a { color:#31EC9A;}
	h2{color:white;}
	h3{color:white;}
	td {color:red;}
	tr {color: green;}
	input{
background-color: aqua;
color: black;
border-radius:15px;}
	table {width: 30%;}
</style>
   <center>
       <form method="post">
               <table bgcolor="gold"
                      <tr align="center">
                       <td colspan = 4>
                           <table border="50">
                               <tr>
                                   </h1>
                               <h1>
                                   <td align=rigth>Stack:</td><td><input name="display" value="0"></td>
                               </tr>
                               <tr>
                                   <td align=rigth>Acc:</td><td><input name="stack" value="0"></td>
                               </h1>
                           </tr>
                           </table>
                       </td>
                   </tr>
                   <h1>
                       <tr align=center>
                       <td>
                       <input type="button" value="7"
                              onClick="addChar(this.form.display, '7')">
                       </td>
                       <td>
                           </h1>
                               <input type="button" value="8"
                                      onclick="addChar(this.form.display, '8')">
                       </td>
  <td>
      <input type="button" value="9"
             onClick="addChar(this.form.display, '9')">
  </td>
  <td>
      <input type="button" value="/"
             onclick="divide(this.form)">
  </td>
                           </tr>
                           <tr align=center>
                               <td>
                                   <input type="button" value="4"
                                          onclick="addChar(this.form.display, '4')">
                               </td>
                               <td>
                                   <input type="button" value="5"
                                          onClick="addChar(this.form.display, '5')">
                               </td>
                                                              <td>
                                   <input type="button" value="6"
                                          onClick="addChar(this.form.display, '6')">
                               </td>
                               <td>
                                   <input type="button" value="*"
                                          onclick="multiply(this.form)">
                               </td>
                           </tr>
                           <tr align=center>
                                                              <td>
                                   <input type="button" value="1"
                                          onClick="addChar(this.form.display, '1')">
                               </td>
                                                              <td>
                                   <input type="button" value="2"
                                          onClick="addChar(this.form.display, '2')">
                               </td>
                                                              <td>
                                   <input type="button" value="3"
                                          onClick="addChar(this.form.display, '3')">
                               </td>

<td>
    <input type="button" value="-"
           onclick="subtract(this.form)">
</td>
                           </tr>
                           <tr align=center>
                               <td>
                                   <input type="button" value="0"
                                          onClick="addChar(this.form.display, '0')">
                               </td>
                               <td>
                                   <input type="button" value="."
                                          onClick="addChar(this.form.display, '.')">
                               </td>
                               <td>
                                   <input type="button" value="+/-"
                                          onclick="changeSing(this.form)">
                               </td>
                               <td>
                                   <input type="button" value="+"
                                          onclick="add(this.form)">
                               </td>
                               <td>
                                   <input type="button" value="ENTER" name="ENTER"
                                          onclick="pushStack(this.form)">
                               </td>
                               <td>
                                   <input type="button" value="C"
                                          onclick="this.form.display.value = 0">
                               </td>
                               <td>
                                   <input type="button" value="<-"
                                          onClick="deleteChar(this.form.display)">
                                   <h1>
                                   </h1>
                           </tr>
                           </table>
       </form>
   </center>
   <br><br><br><br><br>
@endsection