$(function () {

    //アニメーションの速さ
    var speed = .5;

    /* aタグ切り替え -------------------------- */
    var hover_ctrl = true;
    var ua = navigator.userAgent.toLowerCase();
    var phone = ua.match(/iphone|ipod|android/i) ? true : false;

    if (!phone) {
        //リンクタグhoverイベント
        $('a').each(function () {
            $(this).on(
                {
                    'mouseover': function () {
                        if (hover_ctrl == true) {
                            $(this).addClass('hover');
                        }
                    },
                    'mouseleave': function () {
                        if (hover_ctrl == true) {
                            $(this).removeClass('hover');
                        }
                    }
                });
        });
    }

    /* ページ内リンク スクロール -------------------------- */
    $(function () {
        $('a[href^="#"]').click(function () {
            var href = $(this).attr("href");
            var target = $(href == "#" || href == "" ? 'html' : href);
            var position = target.offset().top - 45;
            var speed = 500;
            $("html, body").animate({
                scrollTop: position
            }, speed, "swing");
            return false;
        });
    });


});



// カテゴリー絞り込みボタン
const categoryLabel = '.js-category-label';
const categoryItem = '.js-category-item';
const hideClass = 'is-hide';
const activeClass = 'is-active';

document.addEventListener('DOMContentLoaded', function () {
    const categoryLabels = document.querySelectorAll(categoryLabel);
    // 絞り込みを変更した時
    categoryLabels.forEach(function (item) {
        item.addEventListener('click', function () {
            categoryLabels.forEach(function (item) {
                item.classList.remove(activeClass);
            });
            this.classList.add(activeClass);
            const category = this.dataset.category;
            search_filter(category);
        });
    });
});

function search_filter(category) {
    const categoryItems = document.querySelectorAll(categoryItem);
    // 非表示状態を解除
    categoryItems.forEach(function (item) {
        item.classList.remove(hideClass);
    });
    // 値が空の場合はすべて表示
    if (category === '') {
        return;
    }
    // リスト内の各アイテムをチェック
    categoryItems.forEach(function (item) {
        const itemData = item.dataset.category;
        // 絞り込み対象かどうかを調べる
        if (itemData !== category) {
            item.classList.add(hideClass);
        }
    });
}