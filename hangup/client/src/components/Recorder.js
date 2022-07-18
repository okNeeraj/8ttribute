import React from 'react';
import MicRecorder from 'mic-recorder-to-mp3';

const Mp3Recorder = new MicRecorder({ bitRate: 128 });

class Recorder extends React.Component {
  constructor(props){
    super(props);
    this.state = {
      isRecording: false,
      blobURL: '',
      isBlocked: false,
    };
  }

  start = () => {
    if (this.state.isBlocked) {
      console.log('Permission Denied');
    } else {
      Mp3Recorder
        .start()
        .then(() => {
          this.setState({ isRecording: true });
        }).catch((e) => console.error(e));
    }
  };

  stop = () => {
    Mp3Recorder
      .stop()
      .getMp3()
      .then(([buffer, blob]) => {
        console.log(blob)
        console.log(blob.size)
        const blobURL = URL.createObjectURL(blob)
        this.setState({ blobURL, isRecording: false });
      }).catch((e) => console.log(e));
  };

  componentDidMount() {
    navigator.mediaDevices.getUserMedia({ audio: true },
      () => {
        console.log('Permission Granted');
        this.setState({ isBlocked: false });
      },
      () => {
        console.log('Permission Denied');
        this.setState({ isBlocked: true })
      },
    );
  }

  render(){
    return (
      <div className="Recorder">
        <div className='user-input mt-5'>
          <audio src={this.state.blobURL} controls="controls" />
          <span>{this.state.blobURL}</span>
        </div>
        
        <div className='card-action'>
          <button onClick={this.start} disabled={this.state.isRecording} className="btn btn-primary btn-circle">
            <span className='fa fa-microphone'></span>
          </button>
          <button onClick={this.stop} disabled={!this.state.isRecording} className="btn btn-primary btn-circle">
            <span className='fa fa-pause'></span>
          </button>
        </div>
      </div>
    );
  }
}

export default Recorder;
