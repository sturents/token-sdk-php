<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: token.proto

namespace GPBMetadata;

class Token
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Account::initOnce();
        \GPBMetadata\Blob::initOnce();
        \GPBMetadata\Money::initOnce();
        \GPBMetadata\Pricing::initOnce();
        \GPBMetadata\Security::initOnce();
        \GPBMetadata\Transferinstructions::initOnce();
        \GPBMetadata\Alias::initOnce();
        \GPBMetadata\Extensions\Field::initOnce();
        \GPBMetadata\Extensions\Message::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac4470a0b746f6b656e2e70726f746f121b696f2e746f6b656e2e70726f" .
            "746f2e636f6d6d6f6e2e746f6b656e1a0a626c6f622e70726f746f1a0b6d" .
            "6f6e65792e70726f746f1a0d70726963696e672e70726f746f1a0e736563" .
            "75726974792e70726f746f1a1a7472616e73666572696e73747275637469" .
            "6f6e732e70726f746f1a0b616c6961732e70726f746f1a16657874656e73" .
            "696f6e732f6669656c642e70726f746f1a18657874656e73696f6e732f6d" .
            "6573736167652e70726f746f22d0010a05546f6b656e120a0a0269641801" .
            "20012809123a0a077061796c6f616418022001280b32292e696f2e746f6b" .
            "656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e546f6b656e506179" .
            "6c6f616412470a127061796c6f61645f7369676e61747572657318032003" .
            "280b322b2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b" .
            "656e2e546f6b656e5369676e6174757265121c0a147265706c616365645f" .
            "62795f746f6b656e5f696418042001280912180a10746f6b656e5f726571" .
            "756573745f696418052001280922b0010a0c546f6b656e52657175657374" .
            "120a0a02696418012001280912490a0f726571756573745f7061796c6f61" .
            "6418062001280b32302e696f2e746f6b656e2e70726f746f2e636f6d6d6f" .
            "6e2e746f6b656e2e546f6b656e526571756573745061796c6f616412490a" .
            "0f726571756573745f6f7074696f6e7318072001280b32302e696f2e746f" .
            "6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e546f6b656e5265" .
            "71756573744f7074696f6e732298010a13546f6b656e526571756573744f" .
            "7074696f6e73120f0a0762616e6b5f696418012001280912360a0466726f" .
            "6d18022001280b32282e696f2e746f6b656e2e70726f746f2e636f6d6d6f" .
            "6e2e746f6b656e2e546f6b656e4d656d626572121d0a11736f757263655f" .
            "6163636f756e745f69641803200128094202180112190a11726563656970" .
            "745f72657175657374656418042001280822e7130a13546f6b656e526571" .
            "756573745061796c6f616412130a0b757365725f7265665f696418012001" .
            "280912180a10637573746f6d697a6174696f6e5f69641802200128091214" .
            "0a0c72656469726563745f75726c18032001280912340a02746f18042001" .
            "280b32282e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b" .
            "656e2e546f6b656e4d656d62657212380a09616374696e675f6173180520" .
            "01280b32252e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f" .
            "6b656e2e416374696e67417312520a0b6163636573735f626f6479180620" .
            "01280b323b2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f" .
            "6b656e2e546f6b656e526571756573745061796c6f61642e416363657373" .
            "426f6479480012560a0d7472616e736665725f626f647918072001280b32" .
            "3d2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e" .
            "546f6b656e526571756573745061796c6f61642e5472616e73666572426f" .
            "64794800124d0a137374616e64696e675f6f726465725f626f6479180c20" .
            "01280b322e2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f" .
            "6b656e2e5374616e64696e674f72646572426f64794800124b0a1262756c" .
            "6b5f7472616e736665725f626f6479180d2001280b322d2e696f2e746f6b" .
            "656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e42756c6b5472616e" .
            "73666572426f6479480012190a0b6465736372697074696f6e1808200128" .
            "09420480b5180112160a0e63616c6c6261636b5f73746174651809200128" .
            "09121f0a1364657374696e6174696f6e5f636f756e747279180a20012809" .
            "42021801120e0a067265665f6964180b2001280912180a10746f6b656e5f" .
            "65787069726174696f6e180e2001280312110a09636f756e747269657318" .
            "0f2003280912560a0b63726564656e7469616c7318102003280b32412e69" .
            "6f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e546f6b" .
            "656e526571756573745061796c6f61642e43726564656e7469616c73456e" .
            "7472791a320a1043726564656e7469616c73456e747279120b0a036b6579" .
            "180120012809120d0a0576616c75651802200128093a0238011aaf0a0a0a" .
            "416363657373426f6479125a0a047479706518012003280e32482e696f2e" .
            "746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e546f6b656e" .
            "526571756573745061796c6f61642e416363657373426f64792e5265736f" .
            "757263655479706542021801121a0a0e7265736f757263655f7479706573" .
            "18022003280942021801126a0a127265736f757263655f747970655f6c69" .
            "737418032001280b324c2e696f2e746f6b656e2e70726f746f2e636f6d6d" .
            "6f6e2e746f6b656e2e546f6b656e526571756573745061796c6f61642e41" .
            "6363657373426f64792e5265736f75726365547970654c69737448001270" .
            "0a156163636f756e745f7265736f757263655f6c69737418042001280b32" .
            "4f2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e" .
            "546f6b656e526571756573745061796c6f61642e416363657373426f6479" .
            "2e4163636f756e745265736f757263654c69737448001a6f0a105265736f" .
            "75726365547970654c697374125b0a097265736f75726365731801200328" .
            "0e32482e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b65" .
            "6e2e546f6b656e526571756573745061796c6f61642e416363657373426f" .
            "64792e5265736f75726365547970651ae1030a134163636f756e74526573" .
            "6f757263654c69737412720a097265736f757263657318012003280b325f" .
            "2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e54" .
            "6f6b656e526571756573745061796c6f61642e416363657373426f64792e" .
            "4163636f756e745265736f757263654c6973742e4163636f756e74526573" .
            "6f757263651ad5020a0f4163636f756e745265736f75726365125d0a0474" .
            "79706518012001280e324f2e696f2e746f6b656e2e70726f746f2e636f6d" .
            "6d6f6e2e746f6b656e2e546f6b656e526571756573745061796c6f61642e" .
            "416363657373426f64792e4163636f756e745265736f7572636554797065" .
            "12440a0c62616e6b5f6163636f756e7418022001280b322a2e696f2e746f" .
            "6b656e2e70726f746f2e636f6d6d6f6e2e6163636f756e742e42616e6b41" .
            "63636f756e7442021801124f0a0d637573746f6d65725f64617461180320" .
            "01280b32382e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e7472" .
            "616e73666572696e737472756374696f6e732e437573746f6d6572446174" .
            "61124c0a126163636f756e745f6964656e74696669657218042001280b32" .
            "302e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e6163636f756e" .
            "742e4163636f756e744964656e7469666965722296010a0c5265736f7572" .
            "636554797065120b0a07494e56414c49441000120c0a084143434f554e54" .
            "531001120c0a0842414c414e434553100212100a0c5452414e5341435449" .
            "4f4e53100312190a155452414e534645525f44455354494e4154494f4e53" .
            "1004121b0a1346554e44535f434f4e4649524d4154494f4e5310051a0208" .
            "0112130a0f5354414e44494e475f4f5244455253100622cb010a13416363" .
            "6f756e745265736f757263655479706512130a0f4143434f554e545f494e" .
            "56414c4944100012100a0c4143434f554e545f494e464f100112130a0f41" .
            "43434f554e545f42414c414e4345100212180a144143434f554e545f5452" .
            "414e53414354494f4e53100312210a1d4143434f554e545f5452414e5346" .
            "45525f44455354494e4154494f4e531004121e0a1a4143434f554e545f46" .
            "554e44535f434f4e4649524d4154494f4e1005121b0a174143434f554e54" .
            "5f5354414e44494e475f4f52444552531006420f0a0d7265736f75726365" .
            "5f6c6973741af3020a0c5472616e73666572426f647912100a0863757272" .
            "656e6379180120012809120e0a06616d6f756e7418022001280912560a0c" .
            "64657374696e6174696f6e7318032003280b323c2e696f2e746f6b656e2e" .
            "70726f746f2e636f6d6d6f6e2e7472616e73666572696e73747275637469" .
            "6f6e732e5472616e73666572456e64706f696e744202180112170a0f6c69" .
            "666574696d655f616d6f756e7418042001280912560a0c696e7374727563" .
            "74696f6e7318052001280b32402e696f2e746f6b656e2e70726f746f2e63" .
            "6f6d6d6f6e2e7472616e73666572696e737472756374696f6e732e547261" .
            "6e73666572496e737472756374696f6e7312160a0e657865637574696f6e" .
            "5f6461746518062001280912150a0d636f6e6669726d5f66756e64731807" .
            "2001280812250a1d7365745f7472616e736665725f64657374696e617469" .
            "6f6e735f75726c18082001280912220a1472656d697474616e63655f7265" .
            "666572656e6365180920012809420488b51801420e0a0c72657175657374" .
            "5f626f647922600a08416374696e67417312140a0c646973706c61795f6e" .
            "616d65180120012809120e0a067265665f696418022001280912100a086c" .
            "6f676f5f75726c18032001280912160a0e7365636f6e646172795f6e616d" .
            "651804200128093a0480b5180122c6010a0e546f6b656e5369676e617475" .
            "726512420a06616374696f6e18012001280e32322e696f2e746f6b656e2e" .
            "70726f746f2e636f6d6d6f6e2e746f6b656e2e546f6b656e5369676e6174" .
            "7572652e416374696f6e123c0a097369676e617475726518022001280b32" .
            "292e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e736563757269" .
            "74792e5369676e617475726522320a06416374696f6e120b0a07494e5641" .
            "4c49441000120c0a08454e444f525345441001120d0a0943414e43454c4c" .
            "4544100222620a0b546f6b656e4d656d626572120a0a0269641801200128" .
            "0912140a08757365726e616d651802200128094202180112310a05616c69" .
            "617318032001280b32222e696f2e746f6b656e2e70726f746f2e636f6d6d" .
            "6f6e2e616c6961732e416c69617322f9060a0c546f6b656e5061796c6f61" .
            "64120f0a0776657273696f6e180120012809120e0a067265665f69641802" .
            "2001280912380a0669737375657218032001280b32282e696f2e746f6b65" .
            "6e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e546f6b656e4d656d62" .
            "657212360a0466726f6d18042001280b32282e696f2e746f6b656e2e7072" .
            "6f746f2e636f6d6d6f6e2e746f6b656e2e546f6b656e4d656d6265721234" .
            "0a02746f18052001280b32282e696f2e746f6b656e2e70726f746f2e636f" .
            "6d6d6f6e2e746f6b656e2e546f6b656e4d656d62657212170a0f65666665" .
            "63746976655f61745f6d7318062001280312150a0d657870697265735f61" .
            "745f6d7318072001280312190a0b6465736372697074696f6e1808200128" .
            "09420480b51801123d0a087472616e7366657218092001280b32292e696f" .
            "2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e5472616e" .
            "73666572426f6479480012390a06616363657373180a2001280b32272e69" .
            "6f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e416363" .
            "657373426f6479480012480a0e7374616e64696e675f6f72646572181020" .
            "01280b322e2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f" .
            "6b656e2e5374616e64696e674f72646572426f6479480012460a0d62756c" .
            "6b5f7472616e7366657218112001280b322d2e696f2e746f6b656e2e7072" .
            "6f746f2e636f6d6d6f6e2e746f6b656e2e42756c6b5472616e7366657242" .
            "6f6479480012180a10656e646f7273655f756e74696c5f6d73180b200128" .
            "0312380a09616374696e675f6173180c2001280b32252e696f2e746f6b65" .
            "6e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e416374696e67417312" .
            "190a11726563656970745f726571756573746564180d2001280812180a10" .
            "746f6b656e5f726571756573745f6964180e2001280912140a0c696e6974" .
            "6961746f725f6964180f2001280912640a16617574686f72697a6174696f" .
            "6e5f6d6574616461746118122003280b32442e696f2e746f6b656e2e7072" .
            "6f746f2e636f6d6d6f6e2e746f6b656e2e546f6b656e5061796c6f61642e" .
            "417574686f72697a6174696f6e4d65746164617461456e7472791a3c0a1a" .
            "417574686f72697a6174696f6e4d65746164617461456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a0238014206" .
            "0a04626f647922620a1c45787465726e616c417574686f72697a6174696f" .
            "6e44657461696c73120b0a0375726c180120012809121a0a12636f6d706c" .
            "6574696f6e5f7061747465726e18022001280912190a11617574686f7269" .
            "7a6174696f6e5f75726c18032001280922ae030a0c5472616e7366657242" .
            "6f6479123e0a0872656465656d657218012001280b32282e696f2e746f6b" .
            "656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e546f6b656e4d656d" .
            "6265724202180112560a0c696e737472756374696f6e7318022001280b32" .
            "402e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e7472616e7366" .
            "6572696e737472756374696f6e732e5472616e73666572496e7374727563" .
            "74696f6e7312100a0863757272656e637918042001280912170a0f6c6966" .
            "6574696d655f616d6f756e74180520012809120e0a06616d6f756e741806" .
            "20012809123b0a0b6174746163686d656e747318082003280b32262e696f" .
            "2e746f6b656e2e70726f746f2e636f6d6d6f6e2e626c6f622e4174746163" .
            "686d656e74123b0a0770726963696e6718092001280b32262e696f2e746f" .
            "6b656e2e70726f746f2e636f6d6d6f6e2e70726963696e672e5072696369" .
            "6e674202180112160a0e657865637574696f6e5f64617465180a20012809" .
            "12150a0d636f6e6669726d5f66756e6473180b2001280812220a1472656d" .
            "697474616e63655f7265666572656e6365180c20012809420488b5180122" .
            "ea010a115374616e64696e674f72646572426f647912560a0c696e737472" .
            "756374696f6e7318012001280b32402e696f2e746f6b656e2e70726f746f" .
            "2e636f6d6d6f6e2e7472616e73666572696e737472756374696f6e732e54" .
            "72616e73666572496e737472756374696f6e7312120a0a73746172745f64" .
            "61746518022001280912100a08656e645f6461746518032001280912110a" .
            "096672657175656e6379180420012809120e0a06616d6f756e7418052001" .
            "280912100a0863757272656e637918062001280912220a1472656d697474" .
            "616e63655f7265666572656e6365180720012809420488b5180122c8030a" .
            "1042756c6b5472616e73666572426f647912490a097472616e7366657273" .
            "18012003280b32362e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e" .
            "2e746f6b656e2e42756c6b5472616e73666572426f64792e5472616e7366" .
            "657212140a0c746f74616c5f616d6f756e74180220012809124c0a06736f" .
            "7572636518032001280b323c2e696f2e746f6b656e2e70726f746f2e636f" .
            "6d6d6f6e2e7472616e73666572696e737472756374696f6e732e5472616e" .
            "73666572456e64706f696e741a84020a085472616e73666572120e0a0661" .
            "6d6f756e7418012001280912100a0863757272656e637918022001280912" .
            "0e0a067265665f696418032001280912130a0b6465736372697074696f6e" .
            "18042001280912540a0b64657374696e6174696f6e18052001280b323f2e" .
            "696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e7472616e73666572" .
            "696e737472756374696f6e732e5472616e7366657244657374696e617469" .
            "6f6e125b0a086d6574616461746118062001280b32492e696f2e746f6b65" .
            "6e2e70726f746f2e636f6d6d6f6e2e7472616e73666572696e7374727563" .
            "74696f6e732e5472616e73666572496e737472756374696f6e732e4d6574" .
            "616461746122be110a0a416363657373426f647912430a097265736f7572" .
            "63657318052003280b32302e696f2e746f6b656e2e70726f746f2e636f6d" .
            "6d6f6e2e746f6b656e2e416363657373426f64792e5265736f757263651a" .
            "ea100a085265736f75726365124b0a076163636f756e7418062001280b32" .
            "382e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e" .
            "416363657373426f64792e5265736f757263652e4163636f756e74480012" .
            "5c0a0c7472616e73616374696f6e7318072001280b32442e696f2e746f6b" .
            "656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e416363657373426f" .
            "64792e5265736f757263652e4163636f756e745472616e73616374696f6e" .
            "73480012610a0f7374616e64696e675f6f726465727318102001280b3246" .
            "2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e41" .
            "6363657373426f64792e5265736f757263652e4163636f756e745374616e" .
            "64696e674f7264657273480012520a0762616c616e636518082001280b32" .
            "3f2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e" .
            "416363657373426f64792e5265736f757263652e4163636f756e7442616c" .
            "616e6365480012660a157472616e736665725f64657374696e6174696f6e" .
            "73180c2001280b32452e696f2e746f6b656e2e70726f746f2e636f6d6d6f" .
            "6e2e746f6b656e2e416363657373426f64792e5265736f757263652e5472" .
            "616e7366657244657374696e6174696f6e73480012600a1266756e64735f" .
            "636f6e6669726d6174696f6e180f2001280b32422e696f2e746f6b656e2e" .
            "70726f746f2e636f6d6d6f6e2e746f6b656e2e416363657373426f64792e" .
            "5265736f757263652e46756e6473436f6e6669726d6174696f6e4800124f" .
            "0a076164647265737318052001280b32382e696f2e746f6b656e2e70726f" .
            "746f2e636f6d6d6f6e2e746f6b656e2e416363657373426f64792e526573" .
            "6f757263652e41646472657373420218014800125a0a0d616c6c5f616464" .
            "72657373657318012001280b323d2e696f2e746f6b656e2e70726f746f2e" .
            "636f6d6d6f6e2e746f6b656e2e416363657373426f64792e5265736f7572" .
            "63652e416c6c41646472657373657342021801480012580a0c616c6c5f61" .
            "63636f756e747318022001280b323c2e696f2e746f6b656e2e70726f746f" .
            "2e636f6d6d6f6e2e746f6b656e2e416363657373426f64792e5265736f75" .
            "7263652e416c6c4163636f756e747342021801480012670a10616c6c5f74" .
            "72616e73616374696f6e7318032001280b32472e696f2e746f6b656e2e70" .
            "726f746f2e636f6d6d6f6e2e746f6b656e2e416363657373426f64792e52" .
            "65736f757263652e416c6c4163636f756e745472616e73616374696f6e73" .
            "420218014800125f0a0c616c6c5f62616c616e63657318042001280b3243" .
            "2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e41" .
            "6363657373426f64792e5265736f757263652e416c6c4163636f756e7442" .
            "616c616e63657342021801480012710a19616c6c5f7472616e736665725f" .
            "64657374696e6174696f6e73180d2001280b32482e696f2e746f6b656e2e" .
            "70726f746f2e636f6d6d6f6e2e746f6b656e2e416363657373426f64792e" .
            "5265736f757263652e416c6c5472616e7366657244657374696e6174696f" .
            "6e7342021801480012660a14616c6c5f6163636f756e74735f61745f6261" .
            "6e6b18092001280b32422e696f2e746f6b656e2e70726f746f2e636f6d6d" .
            "6f6e2e746f6b656e2e416363657373426f64792e5265736f757263652e41" .
            "6c6c4163636f756e7473417442616e6b420218014800126e0a18616c6c5f" .
            "7472616e73616374696f6e735f61745f62616e6b180a2001280b32462e69" .
            "6f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e416363" .
            "657373426f64792e5265736f757263652e416c6c5472616e73616374696f" .
            "6e73417442616e6b42021801480012660a14616c6c5f62616c616e636573" .
            "5f61745f62616e6b180b2001280b32422e696f2e746f6b656e2e70726f74" .
            "6f2e636f6d6d6f6e2e746f6b656e2e416363657373426f64792e5265736f" .
            "757263652e416c6c42616c616e636573417442616e6b420218014800127f" .
            "0a21616c6c5f7472616e736665725f64657374696e6174696f6e735f6174" .
            "5f62616e6b180e2001280b324e2e696f2e746f6b656e2e70726f746f2e63" .
            "6f6d6d6f6e2e746f6b656e2e416363657373426f64792e5265736f757263" .
            "652e416c6c5472616e7366657244657374696e6174696f6e73417442616e" .
            "6b4202180148001a1d0a074164647265737312120a0a616464726573735f" .
            "69641801200128091a1d0a074163636f756e7412120a0a6163636f756e74" .
            "5f69641801200128091a290a134163636f756e745472616e73616374696f" .
            "6e7312120a0a6163636f756e745f69641801200128091a2b0a154163636f" .
            "756e745374616e64696e674f726465727312120a0a6163636f756e745f69" .
            "641801200128091a240a0e4163636f756e7442616c616e636512120a0a61" .
            "63636f756e745f69641801200128091a2a0a145472616e73666572446573" .
            "74696e6174696f6e7312120a0a6163636f756e745f69641801200128091a" .
            "270a1146756e6473436f6e6669726d6174696f6e12120a0a6163636f756e" .
            "745f69641801200128091a0e0a0c416c6c4164647265737365731a0d0a0b" .
            "416c6c4163636f756e74731a240a11416c6c4163636f756e747341744261" .
            "6e6b120f0a0762616e6b5f69641801200128091a180a16416c6c4163636f" .
            "756e745472616e73616374696f6e731a280a15416c6c5472616e73616374" .
            "696f6e73417442616e6b120f0a0762616e6b5f69641801200128091a140a" .
            "12416c6c4163636f756e7442616c616e6365731a240a11416c6c42616c61" .
            "6e636573417442616e6b120f0a0762616e6b5f69641801200128091a190a" .
            "17416c6c5472616e7366657244657374696e6174696f6e731a300a1d416c" .
            "6c5472616e7366657244657374696e6174696f6e73417442616e6b120f0a" .
            "0762616e6b5f6964180120012809420a0a087265736f7572636522d3010a" .
            "14546f6b656e4f7065726174696f6e526573756c7412310a05746f6b656e" .
            "18012001280b32222e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e" .
            "2e746f6b656e2e546f6b656e12480a0673746174757318022001280e3238" .
            "2e696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e54" .
            "6f6b656e4f7065726174696f6e526573756c742e537461747573223e0a06" .
            "537461747573120b0a07494e56414c49441000120b0a0753554343455353" .
            "1001121a0a164d4f52455f5349474e4154555245535f4e45454445441002" .
            "223b0a18546f6b656e5265717565737453746174655061796c6f61641210" .
            "0a08746f6b656e5f6964180120012809120d0a0573746174651802200128" .
            "0922c3030a06506f6c696379124f0a1073696e676c655f7369676e617475" .
            "726518012001280b32332e696f2e746f6b656e2e70726f746f2e636f6d6d" .
            "6f6e2e746f6b656e2e506f6c6963792e53696e676c655369676e61747572" .
            "654800124b0a0e616c6c5f7369676e61747572657318022001280b32312e" .
            "696f2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e506f" .
            "6c6963792e416c6c5369676e61747572657348001a4d0a0f53696e676c65" .
            "5369676e6174757265123a0a067369676e657218012001280b322a2e696f" .
            "2e746f6b656e2e70726f746f2e636f6d6d6f6e2e746f6b656e2e506f6c69" .
            "63792e5369676e65721a4c0a0d416c6c5369676e617475726573123b0a07" .
            "7369676e65727318012003280b322a2e696f2e746f6b656e2e70726f746f" .
            "2e636f6d6d6f6e2e746f6b656e2e506f6c6963792e5369676e65721a740a" .
            "065369676e657212110a096d656d6265725f6964180120012809123c0a09" .
            "6b65795f6c6576656c18022001280e32292e696f2e746f6b656e2e70726f" .
            "746f2e636f6d6d6f6e2e73656375726974792e4b65792e4c6576656c1219" .
            "0a11617574686f72697a6174696f6e5f75726c18032001280942080a0670" .
            "6f6c6963792acd020a135472616e73666572546f6b656e53746174757312" .
            "0b0a07494e56414c49441000120b0a0753554343455353100112140a1046" .
            "41494c5552455f52454a45435445441002121e0a1a4641494c5552455f49" .
            "4e53554646494349454e545f46554e44531003121c0a184641494c555245" .
            "5f494e56414c49445f43555252454e4359100412240a204641494c555245" .
            "5f534f555243455f4143434f554e545f4e4f545f464f554e44100512290a" .
            "254641494c5552455f44455354494e4154494f4e5f4143434f554e545f4e" .
            "4f545f464f554e441006121a0a164641494c5552455f494e56414c49445f" .
            "414d4f554e54100a12190a154641494c5552455f494e56414c49445f5155" .
            "4f5445100b122b0a274641494c5552455f45585445524e414c5f41555448" .
            "4f52495a4154494f4e5f5245515549524544100c12130a0f4641494c5552" .
            "455f47454e4552494310094230420b546f6b656e50726f746f73aa022054" .
            "6f6b656e696f2e50726f746f2e436f6d6d6f6e2e546f6b656e50726f746f" .
            "73620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

