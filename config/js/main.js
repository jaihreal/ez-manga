var app = new Vue({
  el: '#app',
  data: {
    myModal: false,
    userName: 'Guest',
    loginValue: 'Login',
    users: [
      { name: 'Jaih Real', classification: 'Admin', status: 'Active'},
      { name: 'John Reylan', classification: 'Reader', status: '15 minutes ago'},
      { name: 'Angela Marie', classification: 'Author', status: '1 hour ago'},
      { name: 'John Doe', classification: 'Reader', status: 'Just now'},
      { name: 'Leni Robs', classification: 'Reader', status: '1 minute ago'},
      { name: 'Bim Bey Maquino (BBM)', classification: 'Author', status: 'Active'},
      { name: 'Manny Marie Packie', classification: 'Reader', status: 'Active'},
      { name: 'Boy Quibs', classification: 'Reader', status: 'Active'},
    ],
    mangas: [
      { title: 'Once A Farmer', genre: 'Slice of Life', chapter: '145', status: 'Completed'},
      { title: 'Had A Dog And', genre: 'Slice of Life', chapter: '100', status: 'Ongoing'},
      { title: 'Bingo Was His Name Oh!', genre: 'Slice of Life', chapter: '190', status: 'Ongoing'},
      { title: 'B-I-N-G-O! B-I-N-G-O! B-I-N-G-O!', genre: 'Slice of Life', chapter: '50', status: 'Completed'},
      { title: 'And! Lee ni Rubs Re Do!', genre: 'Gourmet|Political', chapter: '80', status: 'Ongoing'},
      { title: 'Bim Bey Maquino (BBM)', genre: 'Political | History | Slice of Life', chapter: '105', status: 'Ongoing'},
      { title: 'Manny Marie Packie: The Beninggging', genre: 'Sports | Political | Deities', chapter: '300', status: 'Completed'},
      { title: 'Boy Quibs Raipe Adventure', genre: 'Deities | NTR | Harem', chapter: '589', status: 'Ongoing'},
    ],
  }
});