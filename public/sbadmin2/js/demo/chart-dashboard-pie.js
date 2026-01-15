// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Get user distribution data from data attribute or use fallback
var userDistribution = window.dashboardChartData && window.dashboardChartData.userDistribution
  ? window.dashboardChartData.userDistribution
  : [5, 3, 10, 4];

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
if (ctx) {
  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Admin", "Admin Bidang", "Pegawai", "Pimpinan"], // <-- TAMBAHKAN LABEL BARU
      datasets: [{
        data: userDistribution,
        backgroundColor: ['#4e73df', '#36b9cc', '#1cc88a', '#dc3545'], // <-- TAMBAHKAN WARNA BARU
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'], // <-- TAMBAHKAN
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: true,
        position: 'bottom'
      },
      cutoutPercentage: 80,
    },
  });
}
