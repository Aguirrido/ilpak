
 google.charts.load('upcoming', {

        'packages': ['geochart']
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([

          ['State', 'Accent'],
          ['Baja California', 100],
          ['Sonora', '100'],
          ['Chihuahua', '100'],
          ['Coahuila', '100'],
          ['Nuevo León', '100'],
          ['Tamaulipas', '100'],
          ['Sinaloa', '100'],
          ['Nayarit', '100'],
          ['Durango', '100'],
          ['Zacatecas', '400'],
          ['Jalisco', '400'],
          ['Colima', '400'],
          ['Tlaxcala', '400'],
          ['Aguascalientes', '400'],
          ['Zacatecas', '400'],
          ['San Luis Potosí', '400'],
          ['Puebla', '400'],
          ['Guanajuato', '400'],
          ['Querétaro', '400'],
          ['Hidalgo', '400'],
          ['Morelos', '400'],
          ['Estado de México', 400],
          ['Distrito Federal', 400],
          ['Baja California Sur', '200'],
          ['Michoacán', '200'],
          ['Guerrero', '200'],
          ['Oaxaca', '200'],
          ['Veracruz', '200'],
          ['Tabasco', '200'],
          ['Campeche', '300'],
          ['Chiapas', '200'],
          ['Quintana Roo', '300'],
          ['Yucatán', '300']

        ]);


         var options = {

          region: 'MX', // Mexico
          resolution: 'provinces',
             backgroundColor: '#81d4fa',
             datalessRegionColor: '#f8bbd0',
             defaultColor: '#f5f5f5',


        };
$(document).ready(function() {
console.log( "ready!" );

});

        var chart = new google.visualization.GeoChart(document.getElementById('geochart-colors'));
        chart.draw(data, options);
       function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            var topping = data.getValue(selectedItem.row, 0);
            if(topping=='Coahuila'){

                     $('.cardtext').append('<h1> '+topping+' </h1>'+'<a class="card-link" href="#">*Acuña</a>'+'<h3>*Agujita</h3>'+'<h3>*Arteaga</h3>'+'<h3>*Allende</h3>'+'<h3>*Barrotereán</h3>'+'<h3>*Castaños</h3>'+'<h3>*Cloete</h3>'+'<h3>Cuatro Cienégas</h3>'+'<h3>Frontera</h3>'+'<h3>Jimenez</h3>'+'<h3>Matamoros</h3>'+'<h3>Monclova</h3>'+'<h3>*Morelos</h3>');
            }

          }
        };

        google.visualization.events.addListener(chart, 'select', selectHandler);


      };
