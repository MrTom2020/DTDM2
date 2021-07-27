    var ctxP = document.getElementById("pieChart").getContext('2d');
    const c = [];
    for($i = 0;$i < 10; $i++)
    {
        c.push($i);
    }
    for($ii = 0;$ii < 10;$ii++)
    {
        alert(c[$ii]);
    }
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true
      }
    });