function animate(obj,target,callback) {
    // 当前只允许存在一个定时器 先销毁在创建
    clearInterval(obj.times);
    // var times 的赋值方式 每当开启一个定时器就会开辟一个新的内存空间 很不好
    // 于是 我们采用对象的方式来赋值
    obj.times = setInterval(function() {
        // 缓动动画化公式一定要加到定时器里面这样才能重新计算
        var step = (target - obj.offsetLeft) / 10;
        step > 0 ? step = Math.ceil(step) : step = Math.floor(step);
        if (obj.offsetLeft == target) {
            // 停止动画 销毁定时器 (当前对象里的times)
            clearInterval(obj.times);
            // 定时器结束我位置加回调函数 回调函数就是回头调用的函数
            // 如果有这个参数就调用
            if (callback) {
                callback();
            }
        } else {
            obj.style.left = obj.offsetLeft + step + 'px';
        }
    },15)
}