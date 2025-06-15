// 通常のjs
console.log('step.js');

document.addEventListener('DOMContentLoaded', function() {
    const btn1 = document.getElementById('Button1');
    if (btn1) {
        btn1.addEventListener('click', function(e) {
            e.preventDefault();
            // STEP1, STEPCONT1のactiveを外す
            document.getElementById('STEP1')?.classList.remove('active');
            document.getElementById('STEPCONT1')?.classList.remove('active');
            // STEP2, STEPCONT2にactiveを付与
            document.getElementById('STEP1')?.classList.add('non-gray');
            document.getElementById('STEP2')?.classList.add('active');
            document.getElementById('STEPCONT2')?.classList.add('active');
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const btn2 = document.getElementById('Button2');
    if (btn2) {
        btn2.addEventListener('click', function(e) {
            e.preventDefault();
            // STEP1, STEPCONT1のactiveを外す
            document.getElementById('STEP2')?.classList.remove('active');
            document.getElementById('STEPCONT2')?.classList.remove('active');
            // STEP3, STEPCONT3にactiveを付与
            document.getElementById('STEP1')?.classList.remove('non-gray');
            document.getElementById('STEP2')?.classList.add('non-gray');
            document.getElementById('STEP3')?.classList.add('active');
            document.getElementById('STEPCONT3')?.classList.add('active');
        });
    }
});



