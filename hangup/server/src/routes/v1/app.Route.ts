import Express from 'express'
import ChildRoute from './child.Route'
import AppMiddleware from '../../app/middleware/app.Middleware'

const Router = Express.Router()

// ----------START--------------
// Imports the Google Cloud client library
const textToSpeech = require('@google-cloud/text-to-speech')

// Import other required libraries
const fs = require('fs')
const util = require('util')
// Creates a client
const client = new textToSpeech.TextToSpeechClient()
async function quickStart () {
  // The text to synthesize
  const text = 'Are you Neeraj?'

  // Construct the request
  const request = {
    input: { text },
    // Select the language and SSML voice gender (optional)
    voice: { languageCode: 'en-IN', ssmlGender: 'FEMALE' },
    // voice: { languageCode: 'hi-IN', ssmlGender: 'FEMALE' },
    // select the type of audio encoding
    audioConfig: { audioEncoding: 'MP3' }
  }

  // Performs the text-to-speech request
  const [response] = await client.synthesizeSpeech(request)
  // Write the binary audio content to a local file
  const writeFile = util.promisify(fs.writeFile)
  await writeFile('output-hindi.mp3', response.audioContent, 'binary')
  console.log('Audio content written to file: output.mp3')
}
const willSpeech = false
if (willSpeech) {
  quickStart()
}

// ----------END--------------

Router
  .use(AppMiddleware)
  .get('/', (req: any, res: any) => {
    res.render('index', { message: 'Hi Iam rendering from ejs engine!' })
  })
  .get('/speech', (req: any, res: any) => {
    res.render('index', { message: 'Hi Iam rendering from ejs engine!' })
  })

  .use('/child', ChildRoute)

export default Router
