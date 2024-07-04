
import React from 'react';
import {ChecklistProvider,ChecklistContext} from './component/CheklistContext';
import Checklist from './component/Cheklist';


const App = () => {
  return (
    <ChecklistProvider>
      <div className="App">
        <h2 className='text-center mt-5'>React Checklist</h2>
        <br></br>
        <Checklist/>
      </div>
    </ChecklistProvider>
  );
};

export default App;
