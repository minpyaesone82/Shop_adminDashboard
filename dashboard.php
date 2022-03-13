<?php require_once "core/auth.php"?>
<?php require_once "core/functions.php"?>
<?php include "template/header.php" ?>

<?php include "content.php" ?>

<?php include "template/footer.php"?>
<script src="<?php echo $url; ?>/assets/vendor/counter_up/counter_up.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/chart_js/chart.min.js"></script>
<script>
    $(".counter-up").counterUp({
    delay: 10,
    time:1000
})
<?php

$dateArr = [];
$visitorRate = [];

$today = date("Y-m-d");

for($i=0;$i<10;$i++){

    $date=date_create($today);

    date_sub($date,date_interval_create_from_date_string("$i days"));

    $current = date_format($date,"Y-m-d");

    array_push($dateArr,$current);

    $result = countTotal("viewers","CAST(created_at AS DATE) = '$current'");

    array_push($visitorRate,$result);


}

?>

let dateArr = <?php echo json_encode($dateArr); ?>;// date 10 ရပ်စာ ပြောင်ပြန်

let viewerCountArr = <?php echo json_encode($visitorRate); ?>; // တစ်ရပ်ကို လာကြည့်တဲ့လူ

let ov = document.getElementById('ov').getContext('2d');
let ovChart = new Chart(ov, {
    type: 'line',
    data: {
        labels: viewerCountArr,
        datasets: [
            {
                label: 'Viewer Count',
                data: viewerCountArr,
                backgroundColor: [
                    '#007bff30',
                ],
                borderColor: [
                    '#007bff',
                ],
                borderWidth: 1,
                tension:1.2
            }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                display:false,
                ticks: {
                    beginAtZero: true
                }
            }],
            xAxes:[
                {
                    display:false,
                    gridLines:[
                        {
                            display:true
                        }
                    ]
                }
            ]
        },
        legend:{
            display: true,
            shape:"circle",
            position: 'top',
            labels: {
                fontColor: '#333',
                usePointStyle:true
            }
        }
    }
});



<?php

$catName = [];
$countPostByCategory = [];
foreach(categories() as $c) {

    array_push($catName, $c['title']);
    array_push($countPostByCategory, countTotal('post', "category_id={$c['id']}"));
}
 

?>
    let catArr = <?php echo json_encode($catName); ?>;
    let countArr = <?php  echo json_encode($countPostByCategory); ?>;

var ctx = document.getElementById('op').getContext('2d');
var opChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: catArr,
        datasets: [{
            label: '# vote ',
            data: countArr,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    },
    options: {
        legend: {
            display: true,
          position: 'bottom',
            labels: {
                fontColor: '#333',
                usePointStyle:true
            }
        }
    }
    
    
});



</script>
