import React from 'react';
import { View } from 'react-native';
import { Slider, Block  } from 'galio-framework';



export default function App() {


    return (
      <View style={{ flex: 1, justifyContent: "center", alignItems: "center" }}>
          <Block flex>
              <Slider
                  maximumValue={30}
                  value={10}
                  onSlidingcomplete={() => this.registerTheValue()}
              />
          </Block>

      </View>
  );
}
