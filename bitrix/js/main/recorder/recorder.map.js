{"version":3,"file":"recorder.min.js","sources":["recorder.js"],"names":["window","BX","supportedTypes","audio/mp3","states","idle","recording","paused","Recorder","stream","options","MediaStream","type","isPlainObject","this","isTypeSupported","state","audioContext","mediaStreamNode","scriptNode","worker","Worker","postMessage","action","onmessage","e","data","onCustomEvent","result","bind","isSupported","prototype","start","self","AudioContext","webkitAudioContext","createScriptProcessor","connect","destination","createMediaStreamSource","onaudioprocess","event","input","inputBuffer","getChannelData","stop","disconnect","close","pause","resume","replaceStream","getState","dispose"],"mappings":"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"}