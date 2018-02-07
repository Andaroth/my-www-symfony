var chartSet = false;
$(document).scroll(function(){
  if (chartSet == false) {
    if ($('#chartTrigger').visible(true)) {
      chartSet = true;
      setTimeout(function() {
        // Chart Front End
        new Chart($("#frontendChart"), {
          type: 'doughnut',
          data: {
            datasets: [{
              label: '% of knowledge in FrontEnd',
              data: [95,80,85,65],
              backgroundColor: [
                'rgba(191,127,063,.5)',
                'rgba(063,127,191,.5)',
                'rgba(088,237,237,.5)',
                'rgba(237,237,088,.5)'
              ], //bgcolor
              borderWidth: 3,
              borderColor: '#2e3133'
            }], // datasets
            labels: [
              'HTML',
              'CSS',
              'jQuery',
              'JS'
            ] // labels
          }, // data
          options: {
            animation: {
              duration: 2000
            }
          } // options
        }); // chart end
        // Chart Back End
        new Chart($("#backendChart"), {
          type: 'doughnut',
          data: {
            datasets: [{
              label: '% of knowledge in BackEnd',
              data: [70,45],
              backgroundColor: [
                'rgba(127,063,191,.5)',
                'rgba(011,110,011,.5)'
              ], //bgcolor
              borderWidth: 3,
              borderColor: '#2e3133'
            }], // datasets
            labels: [
              'PHP',
              'NodeJS'
            ] // labels
          }, // data
          options: {
            animation: {
              duration: 3000
            }
          } // options
        }); // chart end
      },500); // interval End
    } // visible end
  } // if chartset end    
}); // scroll end


