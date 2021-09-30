
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

<canvas id="myChart" width="400" height="400"></canvas>
    
  
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['<?php echo $today;?>',
        '<?php echo $one;?>',
        '<?php echo $two;?>',
        '<?php echo $three;?>',
        '<?php echo $four;?>',
        '<?php echo $five;?>',
        '<?php echo $six;?>',
        '<?php echo $seven;?>',],
        datasets: [{
            label: 'Ventas en $',
            data: [<?php echo $sales_today?>,
            <?php echo $sales_one;?>,
            <?php echo $sales_two;?>,
            <?php echo $sales_three;?>,
            <?php echo $sales_four;?>,
            <?php echo $sales_five;?>,
            <?php echo $sales_six;?>,
            <?php echo $sales_seven;?>,
        
        ],
                    
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
    }
});
</script>


<div class="container offset-lg-10 col-2 bg-light">
    <h2 class="text-primary text-center text-bold">TOTAL</h2>  
    <h3 class="text-dark text-center">{{"$".number_format($total,2)}}</h3>
</div>