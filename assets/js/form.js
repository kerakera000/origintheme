

window.addEventListener('load', () => {
  const radioButtons = document.querySelectorAll('input[name="segment"]');
  const corpElement = document.getElementById('corporations');

  if (radioButtons.length && corpElement) {
    const toggleActiveClass = () => {
      const selectedValue = document.querySelector('input[name="segment"]:checked').value;
      if (selectedValue === 'corporations') {
        corpElement.classList.add('active');
      } else {
        corpElement.classList.remove('active');
      }
    };

    // 初期状態でも適用
    toggleActiveClass();

    radioButtons.forEach(radio => {
      radio.addEventListener('change', toggleActiveClass);
    });
  }
});