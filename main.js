// получаем координаты элемента в контексте документа
// возвращает отступ сверху до элемента
// массив элементов меню

// по их ссылкам определяем блоки соответсвующих элементов
// вычисляем расстояние до них

// если расстояние совпало с текущей прокруткой window.pageYOffset => подсвечиваем ссылку с href = "#наш блок"
jQuery(document).ready(function ($) {
  let nav = [...$('.menu-item').children('a')];
  let nav_hrefs = [];
  let blocks_scrolls = [];
  let blocks_heights = []
  for (const el of nav) {
    nav_hrefs.push('#' + el.href.split('#')[1]);
  }
  let nav_len = nav_hrefs.length

  for (const el of nav) {
    let link = '#' + el.href.split('#')[1]
    nav_hrefs.push(link);
    blocks_scrolls.push($(link).offset().top);
    blocks_heights.push($(link).height());
  }
  
  window.addEventListener('scroll', function () {
    for (let i = 0; i <= nav_len; i++) {
      if (Math.abs(blocks_scrolls[i] - pageYOffset) <= 300 || Math.abs(blocks_scrolls[i] + blocks_heights[i] - pageYOffset) <= 300) {
        for (let j = 0; j < nav_len; j++) {
          // Убираем у других
          nav[j].classList.remove('active');
        }
        // Добавляем тому на который нажали
        nav[i].classList.add('active');

      }
    }
  });
});
