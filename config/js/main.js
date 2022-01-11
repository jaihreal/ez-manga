var app = new Vue({
  el: '#app',
  data: {
    myModal: false,
    userName: 'Guest',
    loginValue: 'Login',
    editName: '',
    editEmail: '',
    users: [
      { id: 1 ,name: 'Jaih Real', email: 'jaihreal@gmail.com', type: 'Admin', isBanned: true, status: 'Active'},
      { id: 2 ,name: 'John Reylan', email: 'john@gmail.com', type: 'Reader', isBanned: false, status: '15 minutes ago'},
      { id: 3 ,name: 'Angela Marie', email: 'marie@gmail.com', type: 'Author', isBanned: false, status: '1 hour ago'},
      { id: 4 ,name: 'John Doe', email: 'doe@gmail.com', type: 'Reader', isBanned: false, status: 'Just now'},
      { id: 5 ,name: 'Leni Robs', email: 'robs@gmail.com', type: 'Reader', isBanned: false, status: '1 minute ago'},
      { id: 6 ,name: 'Bim Bey Maquino (BBM)', email: 'bbm@gmail.com', type: 'Author', isBanned: false, status: 'Active'},
      { id: 7 ,name: 'Manny Marie Packie', email: 'mmp@gmail.com', type: 'Reader', isBanned: false, status: 'Active'},
      { id: 8 ,name: 'Boy Quibs', email: 'bq@gmail.com', type: 'Reader', isBanned: false, status: 'Active'},
    ],
    mangas: [
      { id: 1 ,title: 'Once A Farmer', genre: 'Slice of Life', chapter: '145', status: 'Completed'},
      { id: 2 ,title: 'Had A Dog And', genre: 'Slice of Life', chapter: '100', status: 'Ongoing'},
      { id: 3 ,title: 'Bingo Was His Name Oh!', genre: 'Slice of Life', chapter: '190', status: 'Ongoing'},
      { id: 4 ,title: 'B-I-N-G-O! B-I-N-G-O! B-I-N-G-O!', genre: 'Slice of Life', chapter: '50', status: 'Completed'},
      { id: 5 ,title: 'And! Lee ni Rubs Re Do!', genre: 'Gourmet|Political', chapter: '80', status: 'Ongoing'},
      { id: 6 ,title: 'Bim Bey Maquino (BBM)', genre: 'Political | History | Slice of Life', chapter: '105', status: 'Ongoing'},
      { id: 7 ,title: 'Manny Marie Packie: The Beninggging', genre: 'Sports | Political | Deities', chapter: '300', status: 'Completed'},
      { id: 8 ,title: 'Boy Quibs Raipe Adventure', genre: 'Deities | Harem', chapter: '589', status: 'Ongoing'},
    ],
  },
  methods: {
    userId: function(id){
      this.users.forEach(value => {
        if (value.id == id) {
          this.editName = value.name;
          this.editEmail = value.email;
        }
      });
    },
  }
});