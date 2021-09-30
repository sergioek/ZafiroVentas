
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

<canvas id="myChart" width="400" height="400"></canvas>
    
  
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Hace 30 dias','Hace 21 dias','Hace 14 dias','Esta semana'],
        datasets: [{
            label: 'Ventas en $',
            data: [
                <?php echo $fourweek?>,
                <?php echo $threeweek?>,
                <?php echo $twoweek?>,
                <?php echo $week?>,

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