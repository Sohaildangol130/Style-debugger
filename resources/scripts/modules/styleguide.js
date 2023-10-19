copyClipboard();

function copyClipboard() {
  let copyText = document.querySelector('.copy-text');
  copyText.querySelector('button').addEventListener('click', function () {
    let input = copyText.querySelector('.copy-text-content');
    input.select();
    document.execCommand('copy');
    copyText.classList.add('active');
    window.getSelection().removeAllRanges();
    setTimeout(function () {
      copyText.classList.remove('active');
    }, 2500);
  });
}
