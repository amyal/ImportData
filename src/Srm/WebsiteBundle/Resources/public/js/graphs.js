/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(function () {
       
        $('#comboDualAxes').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Consommation d’électricité '
            },
            xAxis: [{
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13']
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}kWh',
                    style: {
                        color: '#89A54E'
                    }
                },
                title: {
                    text: 'Consommation',
                    style: {
                        color: '#89A54E'
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Coût',
                    style: {
                        color: '#4572A7'
                    }
                },
                labels: {
                    format: '{value} €',
                    style: {
                        color: '#4572A7'
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 100,
                floating: true,
                backgroundColor: '#FFFFFF'
            },
            series: [{
                name: 'Coût',
                color: '#4572A7',
                type: 'column',
                yAxis: 1,
                data: [4250, 4000, 4110, 4150, 4400],
                tooltip: {
                    valueSuffix: ' €'
                }
    
            }, {
                name: 'Consommation',
                color: '#89A54E',
                type: 'spline',
                data: [36550, 34550, 33900, 34000,36500],
                tooltip: {
                    valueSuffix: 'kWh'
                }
            }]
        });
    });
    
$(function () {  
$('#basicLine').highcharts({
            title: {
                text: 'Déchets dangereux',
                x: -20 //center
            },
          
            xAxis: {
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13']
            },
            yAxis: {
                title: {
                    text: 'Tonnes'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'tonnes'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Electriques',
                data: [0.11, 0.18, 0.02, 0.09, 0.025]
            }, {
                name: 'Hydrocarbures',
                data: [0.6, 1.1, 0.81, 0.99, 0.33]
            }, {
                name: 'Huiles',
                data: [0.8,0.92,0.55,0.63, 0.92]
            }, {
                name: 'Autres',
                data: [0.22, 0.13, 0.16,0.5, 0.82]
            }]
        });
         });
$(function () { 
        $('#areaStacked').highcharts({
            chart: {
                type: 'area'
            },
            title: {
                text: 'Prélèvements d\'eau'
            },
            xAxis: {
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13', 'jui-13'],
                tickmarkPlacement: 'on',
                title: {
                    enabled: false
                }
            },
            yAxis: {
                title: {
                    text: 'M³ '
                },
                labels: {
                    formatter: function() {
                        return this.value / 1;
                    }
                }
            },
            tooltip: {
                shared: true,
                valueSuffix: ' m³ '
            },
            plotOptions: {
                area: {
                    stacking: 'normal',
                    lineColor: '#666666',
                    lineWidth: 1,
                    marker: {
                        lineWidth: 1,
                        lineColor: '#666666'
                    }
                }
            },
            series: [{
                name: 'Eaux de surface',
                data: [200, 170, 160, 120, 110, 114]
            }, {
                name: 'Nappes phréatiques',
                data: [200, 200, 219, 200, 179, 166]
            }, {
                name: 'Eaux de pluie',
                data: [350, 370, 300, 250, 159, 75]
            }, {
                name: 'Eaux usées',
                data: [0, 0, 0, 0, 0, 0]
            }, {
                name: 'Eaux de ville ou autres',
                data: [1450, 1300, 1200, 1400, 1500, 1670]
            }]
        });
          });
$(function () {
       $('#lineLabels').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Produits Bio '
            },
            xAxis: {
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13','jui-13']
            },
            yAxis: {
                title: {
                    text: 'par % '
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'%';
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: '% des références',
                data: [11.5, 11.5, 11.7073171, 12.5603865, 12.2270742, 14.8]
            }]
        });});
    $(function () {
       $('#lineLabels2').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Covoiturage'
            },
            xAxis: {
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13','jui-13']
            },
            yAxis: {
                title: {
                    text: 'Nombre de salariés '
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'Nb';
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'nombre de salariés',
                data: [4,14,28,26,23,20]
            }]
        });});
       $(function () {
       $('#lineLabels3').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Accidents du travail'
            },
            xAxis: {
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13','jui-13']
            },
            yAxis: {
                title: {
                    text: 'Nombre d\'accidents du travail'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'Nb';
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Nombre d\'accidents du travail',
                data: [0,1,0,1,3,2]
            }]
        });});
   
      $(function () {
       $('#lineLabels4').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Salariés en situation de handicap'
            },
            xAxis: {
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13','jui-13']
            },
            yAxis: {
                title: {
                    text: '% de l\'effectif total'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'%';
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: '% de l\'effectif total',
                data: [4,4,3,4,5,5]
            }]
        });});
    
    $(function () {
    var chart;
    
    $(document).ready(function () {
    	
    	// Build the chart
        $('#pieLegend').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Formations: Hommes et Femmes'
            },
            tooltip: {
        	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                type: 'pie',
                name: 'Formations',
                data: [
                    ['Hommes',   67],
                    ['Femmes',       33]
                ]
            }]
        });
    });
    
});


      $(function () {
       $('#lineLabels5').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Valeur économique: Chiffre d\'affaires'
            },
            xAxis: {
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13','jui-13']
            },
            yAxis: {
                title: {
                    text: '€'
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'€';
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Chiffre d\'affaires (€)',
                data: [40000,45000,50000,55000,70000,77000]
            }]
        });});
   
   
      $(function () {
       $('#lineLabels6').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: 'Satisfaction clients'
            },
            xAxis: {
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13','jui-13']
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            tooltip: {
                enabled: false,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +'';
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Indice de satisfaction',
                data: [5,5,5,6,6,5]
            }]
        });});

$(function () {
        $('#columnRotatedLabels').highcharts({
            chart: {
                type: 'column',
                margin: [ 50, 50, 100, 80]
            },
            title: {
                text: 'Salaire de base et salaire minimum'
            },
            xAxis: {
                 categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13'],
                labels: {
                    rotation: -45,
                    align: 'right',
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Salaire de base/Salaire minimum  (Moyenne sites,%)'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Moyenne sites: <b>{point.y:.1f} %</b>',
            },
            series: [{
                name: 'Moyenne sites',
                data: [115.4,116.8,116.8,116.8,117.4 ],
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    x: 4,
                    y: 10,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif',
                        textShadow: '0 0 3px black'
                    }
                }
            }]
        });
    });
    

$(function () {
       
        $('#comboDualAxes2').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Infractions légales et règlementaires '
            },
            xAxis: [{
                categories: ['jan-13', 'fév-13', 'mar-13', 'avr-13', 'mai-13','jui-13']
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}€',
                    style: {
                        color: '#89A54E'
                    }
                },
                title: {
                    text: 'Montants des sanctions financières',
                    style: {
                        color: '#89A54E'
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Nombre de sanctions non financières',
                    style: {
                        color: '#4572A7'
                    }
                },
                labels: {
                    format: '{value} Nb',
                    style: {
                        color: '#4572A7'
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 100,
                floating: true,
                backgroundColor: '#FFFFFF'
            },
            series: [{
                name: 'Nombre ',
                color: '#4572A7',
                type: 'column',
                yAxis: 1,
                data: [1, 0, 0, 0, 2,0],
                tooltip: {
                    valueSuffix: ' Nb'
                }
    
            }, {
                name: 'Montants',
                color: '#89A54E',
                type: 'spline',
                data: [0, 10000, 250, 1050,0,2000],
                tooltip: {
                    valueSuffix: '€'
                }
            }]
        });
    });
    