function start()
{
   var appetizer = ["","Vegetabel Samossa","Chicken pakora","Corn Soup", "Thai Soup","Lentlis Pakora" ];
   var app_prices = [,3.99,5.99,4.99,4.99,3.99];                              
   var rice = ["","Plain Rice","Brown Rice", "Sticky Rice", "Steam Rice","Indian Pulaw Rice"]; 
   var rice_prices = [,2.99,3.99,6.99,3.99,4.99];     
   var curry = ["","Thai Chicken Curry","Butter Chicken", "Lamb Curry","Vegetable Kurma","Fried Chickpeas Curry"];
   var curry_prices = [,12.99,13.99,14.99,10.99,10.99];     
   var dessert = ["","Homestyle Yougurt","Indian Rasmalai", "Sweet Rice Pudding","Sweet Rice", "Vanila Pudding"];
   var dessert_prices = [0,3.99,4.99,3.99,5.99,3.99];     
   var special = ["","Thai Fried Rice", "Hyderabad Biriyani", "Chinese Pasta","Chicken Sharma","Pakistani Meat Malai" ];
   var special_prices = [0,11.99,14.99,10.99,12.99,14.99];     
   var drink = ["","Blue velvet Juice","Sweet Mango Lassi","Regular Beer","Tapioka","Special Bubble Tea"];
   var drink_prices = [0,5.99,3.99,4.99,5.99,4.99];                             

   outputArray( "Appetizer", appetizer, app_prices,
      document.getElementById( "output1" ) );
   outputArray( "Rice", rice, rice_prices,
      document.getElementById( "output2" ) );
   outputArray( "Curry", curry, curry_prices,
      document.getElementById( "output3" ) );
   outputArray( "Dessert", dessert, dessert_prices,
      document.getElementById( "output4" ) );
   outputArray( "Special", special, special_prices,
      document.getElementById( "output5" ) );
   outputArray( "Drink", drink, drink_prices,
      document.getElementById( "output6" ) );
} // end function start
 
function outputArray( heading, theArray, prices, output )
{
   var content = "<center><h2>" + heading + "</h2></center><center><table>" +
      "<thead><th>Serial NO:</th><th>Food Item</th><th>Price (CAD)</th></thead><tbody>";

   var length = theArray.length; // get array's length once before loop

   for ( var i = 1; i < length; i++ )   
   {
      content += "<tr><td>" + i + "</td><td>" + theArray[ i ] + "</td><td>" + prices[i] +
         "</td></tr>";
   } // end for

   content += "</tbody></table></center>";
   output.innerHTML = content;
} // end function outputArray

window.addEventListener( "load", start, false);