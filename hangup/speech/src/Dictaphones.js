import React, { useState } from 'react'
import { DictaphoneWidgetA, DictaphoneWidgetB } from './Dictaphone'
import SpeechRecognition from './SpeechRecognition'

export default () => {
  const [showFirstWidget, setShowFirstWidget] = useState(true)
  const toggleShowFirstWidget = () => setShowFirstWidget(!showFirstWidget)

  const listenContinuously = () => SpeechRecognition.startListening({
    continuous: true,
    language: 'en-GB'
  })
  // const listenContinuouslyInChinese = () => SpeechRecognition.startListening({
  //   continuous: true,
  //   language: 'zh-CN'
  // })
  const listenContinuouslyInHindi = () => SpeechRecognition.startListening({
    continuous: true,
    language: 'hi-IN'
  })
  const listenOnce = () => SpeechRecognition.startListening({ continuous: false })

  return (
    <div>
      {showFirstWidget && <DictaphoneWidgetA />}
      <DictaphoneWidgetB />
      <button onClick={listenOnce}>Listen once</button>
      <button onClick={listenContinuously}>Listen continuously</button>
      <button onClick={listenContinuouslyInHindi}>Listen continuously (Hindi)</button>
      <button onClick={toggleShowFirstWidget}>Toggle first widget</button>
      <button onClick={SpeechRecognition.stopListening}>Stop</button>
    </div>
  )
}
