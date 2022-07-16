import AppModel from '../models/app.Model'

const getUser = async (req: any, res: any) => {
  res.send('All user list')
}

const addUser = async (req: any, res: any) => {
  const newUser = new AppModel({
    name: 'Bhaskar',
    email: 'bhaskar@gmail.com',
    phone: 9874009484,
    password: 'fse3dfs423430sjl4f3e'
  })
  newUser.save().then(() => console.log('New use added successfully.'))

  res.send(`New user ${newUser.name} added successfully.`)
}

export {
  getUser,
  addUser
}
