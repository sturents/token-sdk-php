<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: member.proto

namespace GPBMetadata;

class Member
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Address::initOnce();
        \GPBMetadata\Alias::initOnce();
        \GPBMetadata\Security::initOnce();
        \GPBMetadata\Extensions\Field::initOnce();
        \GPBMetadata\Extensions\Message::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aee240a0c6d656d6265722e70726f746f121c696f2e746f6b656e2e7072" .
            "6f746f2e636f6d6d6f6e2e6d656d6265721a0b616c6961732e70726f746f" .
            "1a0e73656375726974792e70726f746f1a16657874656e73696f6e732f66" .
            "69656c642e70726f746f1a18657874656e73696f6e732f6d657373616765" .
            "2e70726f746f22490a154d656d6265724164644b65794f7065726174696f" .
            "6e12300a036b657918012001280b32232e696f2e746f6b656e2e70726f74" .
            "6f2e636f6d6d6f6e2e73656375726974792e4b6579222a0a184d656d6265" .
            "7252656d6f76654b65794f7065726174696f6e120e0a066b65795f696418" .
            "0120012809224f0a144d656d626572416c6961734f7065726174696f6e12" .
            "120a0a616c6961735f6861736818012001280912110a057265616c6d1802" .
            "200128094202180112100a087265616c6d5f696418032001280922610a1c" .
            "4d656d6265725265636f7665727952756c65734f7065726174696f6e1241" .
            "0a0d7265636f766572795f72756c6518012001280b322a2e696f2e746f6b" .
            "656e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e5265636f766572" .
            "7952756c6522a9020a174d656d6265725265636f766572794f7065726174" .
            "696f6e125a0a0d617574686f72697a6174696f6e18012001280b32432e69" .
            "6f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e4d65" .
            "6d6265725265636f766572794f7065726174696f6e2e417574686f72697a" .
            "6174696f6e12420a0f6167656e745f7369676e617475726518022001280b" .
            "32292e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e7365637572" .
            "6974792e5369676e61747572651a6e0a0d417574686f72697a6174696f6e" .
            "12110a096d656d6265725f696418012001280912110a09707265765f6861" .
            "736818022001280912370a0a6d656d6265725f6b657918032001280b3223" .
            "2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e73656375726974" .
            "792e4b657922170a154d656d62657244656c6574654f7065726174696f6e" .
            "22180a164d656d626572506172746e65724f7065726174696f6e22640a1e" .
            "4d656d6265725265616c6d5065726d697373696f6e4f7065726174696f6e" .
            "12420a0b7065726d697373696f6e7318012003280e322d2e696f2e746f6b" .
            "656e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e5265616c6d5065" .
            "726d697373696f6e22f9060a0f4d656d6265724f7065726174696f6e1246" .
            "0a076164645f6b657918012001280b32332e696f2e746f6b656e2e70726f" .
            "746f2e636f6d6d6f6e2e6d656d6265722e4d656d6265724164644b65794f" .
            "7065726174696f6e4800124c0a0a72656d6f76655f6b657918022001280b" .
            "32362e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d656d6265" .
            "722e4d656d62657252656d6f76654b65794f7065726174696f6e4800124a" .
            "0a0c72656d6f76655f616c69617318042001280b32322e696f2e746f6b65" .
            "6e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e4d656d626572416c" .
            "6961734f7065726174696f6e480012470a096164645f616c696173180520" .
            "01280b32322e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d65" .
            "6d6265722e4d656d626572416c6961734f7065726174696f6e4800124a0a" .
            "0c7665726966795f616c69617318062001280b32322e696f2e746f6b656e" .
            "2e70726f746f2e636f6d6d6f6e2e6d656d6265722e4d656d626572416c69" .
            "61734f7065726174696f6e480012540a0e7265636f766572795f72756c65" .
            "7318072001280b323a2e696f2e746f6b656e2e70726f746f2e636f6d6d6f" .
            "6e2e6d656d6265722e4d656d6265725265636f7665727952756c65734f70" .
            "65726174696f6e480012480a077265636f76657218082001280b32352e69" .
            "6f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e4d65" .
            "6d6265725265636f766572794f7065726174696f6e480012450a0664656c" .
            "65746518092001280b32332e696f2e746f6b656e2e70726f746f2e636f6d" .
            "6d6f6e2e6d656d6265722e4d656d62657244656c6574654f706572617469" .
            "6f6e4800124e0a0e7665726966795f706172746e6572180a2001280b3234" .
            "2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e" .
            "4d656d626572506172746e65724f7065726174696f6e480012500a10756e" .
            "7665726966795f706172746e6572180b2001280b32342e696f2e746f6b65" .
            "6e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e4d656d6265725061" .
            "72746e65724f7065726174696f6e480012590a117265616c6d5f7065726d" .
            "697373696f6e73180c2001280b323c2e696f2e746f6b656e2e70726f746f" .
            "2e636f6d6d6f6e2e6d656d6265722e4d656d6265725265616c6d5065726d" .
            "697373696f6e4f7065726174696f6e4800420b0a096f7065726174696f6e" .
            "22770a0c4d656d62657255706461746512110a09707265765f6861736818" .
            "012001280912110a096d656d6265725f696418022001280912410a0a6f70" .
            "65726174696f6e7318032003280b322d2e696f2e746f6b656e2e70726f74" .
            "6f2e636f6d6d6f6e2e6d656d6265722e4d656d6265724f7065726174696f" .
            "6e22eb020a174d656d6265724f7065726174696f6e4d6574616461746112" .
            "640a126164645f616c6961735f6d6574616461746118012001280b32462e" .
            "696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e4d" .
            "656d6265724f7065726174696f6e4d657461646174612e416464416c6961" .
            "734d65746164617461480012600a106164645f6b65795f6d657461646174" .
            "6118022001280b32442e696f2e746f6b656e2e70726f746f2e636f6d6d6f" .
            "6e2e6d656d6265722e4d656d6265724f7065726174696f6e4d6574616461" .
            "74612e4164644b65794d6574616461746148001a590a10416464416c6961" .
            "734d6574616461746112120a0a616c6961735f6861736818012001280912" .
            "310a05616c69617318022001280b32222e696f2e746f6b656e2e70726f74" .
            "6f2e636f6d6d6f6e2e616c6961732e416c6961731a250a0e4164644b6579" .
            "4d6574616461746112130a0b6b6579636861696e5f696418012001280942" .
            "060a047479706522f1010a1f4d656d6265724f7065726174696f6e526573" .
            "706f6e73654d65746164617461127d0a1b6164645f616c6961735f726573" .
            "706f6e73655f6d6574616461746118012001280b32562e696f2e746f6b65" .
            "6e2e70726f746f2e636f6d6d6f6e2e6d656d6265722e4d656d6265724f70" .
            "65726174696f6e526573706f6e73654d657461646174612e416464416c69" .
            "6173526573706f6e73654d6574616461746148001a470a18416464416c69" .
            "6173526573706f6e73654d6574616461746112120a0a616c6961735f6861" .
            "736818012001280912170a0f766572696669636174696f6e5f6964180220" .
            "01280942060a0474797065223f0a0c5265636f7665727952756c6512150a" .
            "0d7072696d6172795f6167656e7418012001280912180a107365636f6e64" .
            "6172795f6167656e747318022003280922aa050a064d656d626572120a0a" .
            "02696418012001280912110a096c6173745f686173681802200128091214" .
            "0a0c616c6961735f68617368657318032003280912310a046b6579731804" .
            "2003280b32232e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e73" .
            "656375726974792e4b6579121f0a17756e76657269666965645f616c6961" .
            "735f68617368657318052003280912410a0d7265636f766572795f72756c" .
            "6518062001280b322a2e696f2e746f6b656e2e70726f746f2e636f6d6d6f" .
            "6e2e6d656d6265722e5265636f7665727952756c65121e0a166c6173745f" .
            "7265636f766572795f73657175656e6365180720012805121f0a176c6173" .
            "745f6f7065726174696f6e5f73657175656e6365180820012805123d0a04" .
            "7479706518092001280e322f2e696f2e746f6b656e2e70726f746f2e636f" .
            "6d6d6f6e2e6d656d6265722e4d656d6265722e4d656d6265725479706512" .
            "120a0a706172746e65725f6964180a20012809121b0a1369735f76657269" .
            "666965645f706172746e6572180b2001280812100a087265616c6d5f6964" .
            "180c2001280912480a117265616c6d5f7065726d697373696f6e73180d20" .
            "03280e322d2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6d65" .
            "6d6265722e5265616c6d5065726d697373696f6e12380a0b657870697265" .
            "644b657973180e2003280b32232e696f2e746f6b656e2e70726f746f2e63" .
            "6f6d6d6f6e2e73656375726974792e4b6579228c010a0a4d656d62657254" .
            "79706512170a13494e56414c49445f4d454d4245525f545950451000120c" .
            "0a08504552534f4e414c1001120d0a095452414e5349454e541004120c0a" .
            "08425553494e455353100512100a0c4c4943454e5345445f545050100612" .
            "130a0f4449524543545f42414e4b5f545050100712080a0442414e4b1008" .
            "12090a05544f4b454e100922ac010a0d416464726573735265636f726412" .
            "0a0a026964180120012809120c0a046e616d6518022001280912370a0761" .
            "64647265737318032001280b32262e696f2e746f6b656e2e70726f746f2e" .
            "636f6d6d6f6e2e616464726573732e4164647265737312440a1161646472" .
            "6573735f7369676e617475726518042001280b32292e696f2e746f6b656e" .
            "2e70726f746f2e636f6d6d6f6e2e73656375726974792e5369676e617475" .
            "72653a02180122ba010a0750726f66696c65121e0a12646973706c61795f" .
            "6e616d655f666972737418012001280942021801121d0a11646973706c61" .
            "795f6e616d655f6c61737418022001280942021801121b0a136f72696769" .
            "6e616c5f706963747572655f696418032001280912180a10736d616c6c5f" .
            "706963747572655f696418042001280912190a116d656469756d5f706963" .
            "747572655f696418052001280912180a106c617267655f70696374757265" .
            "5f69641806200128093a0480b518012286010a0e52656365697074436f6e" .
            "7461637412130a0576616c7565180120012809420480b51801123f0a0474" .
            "79706518022001280e32312e696f2e746f6b656e2e70726f746f2e636f6d" .
            "6d6f6e2e6d656d6265722e52656365697074436f6e746163742e54797065" .
            "221e0a0454797065120b0a07494e56414c4944100012090a05454d41494c" .
            "1001227f0a06446576696365120c0a046e616d6518012001280912340a03" .
            "6b657918022001280b32232e696f2e746f6b656e2e70726f746f2e636f6d" .
            "6d6f6e2e73656375726974792e4b65794202180112310a046b6579731803" .
            "2003280b32232e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e73" .
            "656375726974792e4b657922ed010a0d437573746f6d697a6174696f6e12" .
            "180a10637573746f6d697a6174696f6e5f6964180120012809120c0a046e" .
            "616d6518052001280912140a0c6c6f676f5f626c6f625f69641802200128" .
            "0912470a06636f6c6f727318032003280b32372e696f2e746f6b656e2e70" .
            "726f746f2e636f6d6d6f6e2e6d656d6265722e437573746f6d697a617469" .
            "6f6e2e436f6c6f7273456e74727912140a0c636f6e73656e745f74657874" .
            "18042001280912100a086170705f6e616d651806200128091a2d0a0b436f" .
            "6c6f7273456e747279120b0a036b6579180120012809120d0a0576616c75" .
            "651802200128093a02380122600a084b6579636861696e12130a0b6b6579" .
            "636861696e5f6964180120012809120c0a046e616d651802200128091231" .
            "0a046b65797318032003280b32232e696f2e746f6b656e2e70726f746f2e" .
            "636f6d6d6f6e2e73656375726974792e4b6579227a0a0a4d656d62657249" .
            "6e666f120a0a02696418012001280912330a07616c696173657318022003" .
            "280b32222e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e616c69" .
            "61732e416c69617312140a0c70726f66696c655f6e616d65180320012809" .
            "12150a0d637265617465645f61745f6d731804200128032a510a1250726f" .
            "66696c655069637475726553697a65120b0a07494e56414c49441000120c" .
            "0a084f524947494e414c100112090a05534d414c4c1002120a0a064d4544" .
            "49554d100312090a054c4152474510042a680a104372656174654d656d62" .
            "65725479706512170a13494e56414c49445f4d454d4245525f5459504510" .
            "00120c0a08504552534f4e414c1001120c0a08425553494e455353100212" .
            "0d0a095452414e5349454e54100312100a0c4c4943454e5345445f545050" .
            "10042a7f0a0f5265616c6d5065726d697373696f6e121c0a18494e56414c" .
            "49445f5245414c4d5f5045524d495353494f4e100012100a0c5645524946" .
            "595f414c4941531001120d0a094144445f414c494153100212100a0c5245" .
            "4d4f56455f414c4941531003120b0a074144445f4b45591004120e0a0a52" .
            "454d4f56455f4b455910054232420c4d656d62657250726f746f73aa0221" .
            "546f6b656e696f2e50726f746f2e436f6d6d6f6e2e4d656d62657250726f" .
            "746f73620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

