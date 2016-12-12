@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Reports</h4></div>

                <div class="panel-body">

                  <div>
                      <div>
                          <button type="button"  onclick="faculty()" class = "btn">Faculty</button>
                          <button type="button"  onclick="student()" class = "btn">Students</button>
                          <button type="button"  onclick="studentPerClass()" class = "btn">Student Per Class</button>
                          <button type="button"  onclick="coursePerTeacher()" class = "btn">Course Per Teacher</button>
                          <button type="button"  onclick="housing()" class = "btn">Housing</button>
                     </div>
                     <div id="container" style="min-width:relative; min-height: 100%;"></div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css">
${demo.css}
</style>
<script type="text/javascript">

function studentPerClass() {
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Students per class'
    },
    subtitle: {
        text: null
    },
    xAxis: {
        categories: ['class A', 'class B', 'class C', 'class D', 'class E'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Number of students ',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' thousand'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: 0,
        y: 0,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: '1st sem',
        data: [10, 43, 12, 20, 50]
    },{
        name: '2nd sem',
        data: [63, 12, 20, 5, 19]
    },{
        name: 'Acad year', //combined 1st and 2nd sem
        data: [73, 55, 32, 25, 69]
    }]
});
};

function faculty() {
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Faculty population'
    },
    subtitle: {
        text: null
    },
    xAxis: {
        categories: ['2012', '2013', '2014', '2015', '2016'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        max: 200,
        title: {
            text: 'Population (hundreds)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' hundred'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: 0,
        y: 0,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: '1st sem',
        data: [10, 43, 12, 20, 50]
    },{
        name: '2nd sem',
        data: [63, 12, 20, 5, 19]
    },{
        name: 'Acad year', //combined 1st and 2nd sem
        data: [73, 55, 32, 25, 69]
    }]
});
};

function student() {
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Student population'
    },
    subtitle: {
        text: null
    },
    xAxis: {
        categories: ['2012', '2013', '2014', '2015', '2016'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        max: 300,
        title: {
            text: 'Population (thousands)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' thousand'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: 0,
        y: 0,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: '1st sem',
        data: [10, 43, 12, 20, 50]
    },{
        name: '2nd sem',
        data: [63, 12, 20, 5, 19]
    },{
        name: 'Acad year', //combine 1st and 2nd sem
        data: [73, 55, 32, 25, 69]
    }]
});
};

function coursePerTeacher() {
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Courses per teacher'
    },
    subtitle: {
        text: null
    },
    xAxis: {
        categories: ['teacher A', 'teacher B', 'teacher C', 'teacher D', 'teacher E'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        max: 30,
        title: {
            text: 'Number of Courses',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' thousand'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: 0,
        y: 0,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: '1st sem',
        data: [5, 10, 3, 7, 12]
    },{
        name: '2nd sem',
        data: [2, 4, 5, 1, 3]
    },{
        name: 'Acad year', //combined 1st and 2nd sem
        data: [7, 14, 8, 8, 15]
    }]
});
};

function housing() {
Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Student housing'
    },
    subtitle: {
        text: null
    },
    xAxis: {
        categories: ['2012', '2013', '2014', '2015', '2016'],
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        max: 20,
        title: {
            text: 'Number of Dormers (thousands)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' thousand'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: 0,
        y: 0,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: [{
        name: '1st sem',
        data: [5, 10, 3, 7, 12]
    },{
        name: '2nd sem',
        data: [2, 4, 5, 1, 3]
    },{
        name: 'Acad year', //combined 1st and 2nd sem
        data: [7, 14, 8, 8, 15]
    }]
});
};

</script>
