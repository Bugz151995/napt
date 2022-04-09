<script>
  document.addEventListener('DOMContentLoaded', () => {
    const salesChartCtx = document.getElementById('sales').getContext('2d');
    const salesChart = new Chart(salesChartCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Items Sold',
          data: [7,8,4,2],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 1
        }, {
          label: 'Items Unsold',
          data: [2,8,7,4],
          backgroundColor: [
            'rgba(54, 162, 235, 0.2)'
          ],
          borderColor: [
            'rgba(54, 162, 235, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        },
        plugins: {
            title: {
                display: true,
                text: 'Sales'
            }
        }
      }
    });
  });
</script>