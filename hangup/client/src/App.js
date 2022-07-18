import './styles/Bootstrap.css';
import './styles/App.css';
import Recorder from './components/Recorder';
import VerificationStep from './components/VerificationStep';
// import MyRecorder from './components/MyRecorder';

function App() {
  return (
    <div className="App">
      <div className='container'>
        <div className='row justify-content-center'>
          <div className='col-md-8'>
            <div className="card mt-5">
              <div className="card-body">
                <VerificationStep />
                <Recorder />
                {/* <MyRecorder /> */}
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  );
}

export default App;
