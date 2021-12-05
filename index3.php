<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.7.0/libs/jszip.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/pptxgenjs@3.7.0/dist/pptxgen.min.js"></script>
  <script>
  // 1. Create a new Presentation
  let pres = new PptxGenJS();

  // 2. Add a Slide
  let slide = pres.addSlide();

  // 3. Add one or more objects (Tables, Shapes, Images, Text and Media) to the Slide
  
  // 標題
  slide.addText("xxx人選推薦", {
    x: 1,
    y: 0.3,
    w: 5,
    h: 0.5,
    bold:true,
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 24
  });
  // 頭貼
  slide.addText("", {
    x: 1.1,
    y: 0.8,
    w: 0.8,
    h: 0.8,
    fill: "f3f7fa",
  });
  slide.addImage({
    path: "./img/get_Hpic64.php-2.jpeg",
    x: 1,
    y: 0.9,
    sizing: {
      type: "cover",
      w: 0.8,
      h: 0.8
    }
  });
  // 名稱
  slide.addText("欸你這週要幹嘛", {
    x: 2,
    y: 1,
    w: 2.5,
    h: 0.8,
    bold:true,
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 18
  });
  // 標題
  slide.addText("*確認執行後始詢問網紅之意願與檔期", {
    x: 7.5,
    y: 0,
    w: 2.5,
    h: 0.5,
    bold:true,
    color: "#f95e28",
    fontFace: "Microsoft JhengHei",
    fontSize: 8
  });
  //fb
  slide.addImage({
    path: "./img/fb-07.png",
    x: 5.5,
    y: 0.3,
    hyperlink:{url:'https://github.com'}
  });

  slide.addText([
    { text: "9,784",option:{bold:true}},
    {text:"粉絲", options: { fontSize: 7, breakLine: true } },
    { text: "4,784",option:{bold:true}},
    {text:"平均讚", options: { fontSize: 7, breakLine: true } },
    { text: "4%",option:{bold:true}},
    {text:"互動率", options: { fontSize: 7, breakLine: true } },
    ],{
    x: 5.55,
    y: 0.4,
    w: 1,
    h: 0.9,
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 10
  });
  //yt
  slide.addImage({
    path: "./img/yt-07.png",
    x: 6.5,
    y: 0.3,
    hyperlink:{url:'https://github.com'}
  });
  slide.addText([
    { text: "9,784",option:{bold:true}},
    {text:"訂閱", options: { fontSize: 7, breakLine: true } },
    { text: "4,784",option:{bold:true}},
    {text:"總觀看", options: { fontSize: 7, breakLine: true } },
    { text: "4,784",option:{bold:true}},
    {text:"平均觀看", options: { fontSize: 7, breakLine: true } },
    ],{
    x: 6.55,
    y: 0.4,
    w: 1,
    h: 0.9,
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 10,
  });
  //ig
  slide.addImage({
    path: "./img/ig-07.png",
    x: 7.5,
    y: 0.3,
    hyperlink:{url:'https://github.com'}
  });
  slide.addText([
    { text: "9,784",option:{bold:true}},
    {text:"粉絲", options: { fontSize: 7, breakLine: true } },
    { text: "4,784",option:{bold:true}},
    {text:"平均愛心", options: { fontSize: 7, breakLine: true } },
    { text: "5%",option:{bold:true}},
    {text:"互動率", options: { fontSize: 7, breakLine: true } },
    ],{
    x: 7.55,
    y: 0.4,
    w: 1,
    h: 0.9,
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 10,
  });
  //其他平台
  slide.addImage({
    path: "./img/other-07.png",
    x: 8.5,
    y: 0.3,
    hyperlink:{url:'https://github.com'}
  });
  slide.addText([
    { text:"其他平台", options: {bold:true, breakLine: true }},
    { text: "9,784",option:{bold:true}},
    {text:"粉絲", options: { fontSize: 7, breakLine: true } },
    { text: "-",option:{bold:true}},
    {text:"", options: { fontSize: 7, breakLine: true } },
    { text: "-",option:{bold:true}},
    {text:"", options: { fontSize: 7, breakLine: true } },
    ],{
    x: 8.5,
    y: 0.3,
    w: 1,
    h: 0.9,
    align:"center",
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 10,
  });
  
  // 類型
  slide.addText("#Youtuber #圖文作家 #Instagramer #美妝 #生活 #開箱", {
    x: 5,
    y: 1.1,
    w: 4.5,
    h: 0.8,
    bold:true,
    align:'right',
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 12
  });
  // 橫線
  slide.addText("", {
    x: 1,
    y: 1.8,
    w: 8.5,
    h: 0.03,
    fill: "#34495e",
  });
  // 簡介
  
  slide.addText("ABOUT", {
    x: 0.95,
    y: 3.1,
    w: 2.7,
    h: 0.5,
    fontFace: "Microsoft JhengHei",
    bold:true,
    color: "f3f4f5",
    align:"right",
    fontSize: 27,
  });
  slide.addText("簡介", {
    x: 0.95,
    y: 2,
    w: 2.7,
    h: 0.3,
    bold:true,
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 12
  });
  slide.addText("劉芒從模特兒轉戰YouTuber，她爽朗又幽默的個性造就影片的浮誇風格，也因為那些浮誇感，讓影片充滿了「笑果」，讓人印象深刻。", {
    x: 0.95,
    y: 2,
    w: 2.7,
    h: 1.4,
    color: "#4b6584",
    fontFace: "Microsoft JhengHei",
    fontSize: 11
  });
  // 推薦

  slide.addText("RECOMMEND", {
    x: 0.9,
    y: 4.7,
    w: 2.8,
    h: 0.5,
    fontFace: "Microsoft JhengHei",
    bold:true,
    color: "f3f4f5",
    align:"right",
    fontSize: 27,
  });
  slide.addText("推薦原因", {
    x: 0.95,
    y: 3.5,
    w: 2.7,
    h: 0.3,
    bold:true,
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 12
  });
  slide.addText("怪奇事務所，透過具有識別性的插圖，巧妙地將生活事物與冷知識相連結，趣味的圖文內容吸引大批粉絲長期關注。透過他的知名度來宣傳本產品，能增加討論度，也能宣導大家重視洗眼睛的重要性。", {
    x: 0.95,
    y: 3.7,
    w: 2.7,
    h: 1.35,
    color: "#4b6584",
    fontFace: "Microsoft JhengHei",
    fontSize: 11
  });
  //圖1
  slide.addText("", {
    x: 3.6,
    y: 2,
    w: 2.7,
    h: 3.2,
    fill: "f3f7fa",
  });
  slide.addImage({
    path: "./img/get_pic64.php.jpeg",
    x: 3.6,
    y: 2,
    w:3.7,
    h:3.7,
    sizing: {
      type: "crop",
      w: 2.7,
      h: 2.7,
      x:0.5,
      y:0.5
    }
  });
  slide.addText("圖片標題", {
    x: 3.6,
    y: 4.8,
    w: 1,
    h: 0.3,
    color: "#34495e",
    bold:true,
    fontFace: "Microsoft JhengHei",
    fontSize: 12
  });
  

  
  //圖2
  slide.addText("", {
    x: 6.4,
    y: 2.5,
    w: 1.6,
    h: 1.9,
    fill: "f3f7fa",
  });
  
  slide.addText("圖片標題", {
    x: 6.4,
    y: 4.1,
    w: 1,
    h: 0.3,
    color: "#34495e",
    bold:true,
    fontFace: "Microsoft JhengHei",
    fontSize: 12
  });
  slide.addImage({
    path: "./img/get_pic64.php.jpeg",
    x: 6.4,
    y: 2.5,
    w:2.2,
    h:2.2,
    sizing: {
      type: "crop",
      w: 1.6,
      h: 1.6,
      x:0.3,
      y:0.3
    }
  });
  slide.addText("", {
    x: 6.4,
    y: 4.5,
    w: 1.6,
    h: 0.7,
    fill: "f3f7fa",
  });
  slide.addText("預估圖文互動數", {
    x: 6.4,
    y: 4.5,
    w: 1.6,
    h: 0.3,
    color: "#34495e",
    bold:true,
    fontFace: "Microsoft JhengHei",
    fontSize: 12
  });
  slide.addText("9,000", {
    x: 6.4,
    y: 4.8,
    w: 1.6,
    h: 0.3,
    align:"center",
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 18
  });


  slide.addText("", {
    x: 6.4,
    y: 2,
    w: 3.1,
    h: 0.4,
    fill: "f3f7fa",
  });
  slide.addText("STYLE", {
    x: 8,
    y: 3,
    w: 1.5,
    h: 0.5,
    fontFace: "Microsoft JhengHei",
    bold:true,
    color: "f3f4f5",
    align:"right",
    fontSize: 27,
  });
  
  slide.addText("https://www.instagram.com/p/CS4VaHdhvKO/?utm_source=ig_web_copy_link", {
    x: 8,
    y: 2.45,
    w: 1.4,
    h: 1.1,
    color: "#34495e",
    fontFace: "Microsoft JhengHei",
    fontSize: 8,
    hyperlink:{url:'https://www.instagram.com/p/CS4VaHdhvKO/?utm_source=ig_web_copy_link'}
  });
  slide.addText("xx風格", {
    x: 8,
    y: 2.45,
    w: 1,
    h: 0.3,
    color: "#34495e",
    bold:true,
    fontFace: "Microsoft JhengHei",
    fontSize: 12
  });
  //圖3
  slide.addText("", {
    x: 8.1,
    y: 3.5,
    w: 1.4,
    h: 1.6,
    fill: "f3f7fa",
  });
  slide.addText("圖片標題", {
    x: 8.1,
    y: 3.5,
    w: 1,
    h: 0.3,
    color: "#34495e",
    bold:true,
    fontFace: "Microsoft JhengHei",
    fontSize: 12
  });
  slide.addImage({
    path: "./img/get_pic64.php.jpeg",
    x: 8.1,
    y: 3.8,
    w:1.9,
    h:1.9,
    sizing: {
      type: "crop",
      w: 1.4,
      h: 1.4,
      x:0.27,
      y:0.27
    }
  });
  
  
  // 4. Save the Presentation
  pres.writeFile();
  </script>

</body>

</html>