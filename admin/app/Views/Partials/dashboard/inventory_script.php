<script>
  document.addEventListener('DOMContentLoaded', () => {
    const inventoryChartCtx = document.getElementById('inventory').getContext('2d');
    const inventoryChart = new Chart(inventoryChartCtx, {
      type: 'bar',
      title: 'Test',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Items on Stock',
          data: [5,10,2,2],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)'
          ],
          borderWidth: 1
        }, {
          label: 'Items on Auction',
          data: [5,10,2,2],
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
                text: 'Inventory'
            }
        }
      }
    });
  });
</script>