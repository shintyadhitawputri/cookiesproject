document.addEventListener('DOMContentLoaded', function() {
    const toggleSwitch = document.getElementById('status');
    const outputA = document.getElementById('output-a');
    const outputB = document.getElementById('output-b');
  
    toggleSwitch.addEventListener('change', function() {
      if (toggleSwitch.checked) {
        outputA.classList.remove('active');
        outputB.classList.add('active');
      } else {
        outputA.classList.add('active');
        outputB.classList.remove('active');
      }
    });
});