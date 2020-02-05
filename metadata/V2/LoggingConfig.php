<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace GPBMetadata\Google\Logging\V2;

class LoggingConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae72b0a26676f6f676c652f6c6f6767696e672f76322f6c6f6767696e67" .
            "5f636f6e6669672e70726f746f1211676f6f676c652e6c6f6767696e672e" .
            "76321a1b676f6f676c652f70726f746f6275662f656d7074792e70726f74" .
            "6f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e" .
            "70726f746f1a1f676f6f676c652f70726f746f6275662f74696d65737461" .
            "6d702e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f" .
            "6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e7072" .
            "6f746f2290040a074c6f6753696e6b120c0a046e616d6518012001280912" .
            "130a0b64657374696e6174696f6e180320012809120e0a0666696c746572" .
            "180520012809124b0a156f75747075745f76657273696f6e5f666f726d61" .
            "7418062001280e32282e676f6f676c652e6c6f6767696e672e76322e4c6f" .
            "6753696e6b2e56657273696f6e466f726d61744202180112170a0f777269" .
            "7465725f6964656e7469747918082001280912180a10696e636c7564655f" .
            "6368696c6472656e180920012808123e0a1062696771756572795f6f7074" .
            "696f6e73180c2001280b32222e676f6f676c652e6c6f6767696e672e7632" .
            "2e42696751756572794f7074696f6e734800122f0a0b6372656174655f74" .
            "696d65180d2001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d70122f0a0b7570646174655f74696d65180e2001280b321a" .
            "2e676f6f676c652e70726f746f6275662e54696d657374616d7012320a0a" .
            "73746172745f74696d65180a2001280b321a2e676f6f676c652e70726f74" .
            "6f6275662e54696d657374616d704202180112300a08656e645f74696d65" .
            "180b2001280b321a2e676f6f676c652e70726f746f6275662e54696d6573" .
            "74616d7042021801223f0a0d56657273696f6e466f726d6174121e0a1a56" .
            "455253494f4e5f464f524d41545f554e535045434946494544100012060a" .
            "025632100112060a025631100242090a076f7074696f6e7322310a0f4269" .
            "6751756572794f7074696f6e73121e0a167573655f706172746974696f6e" .
            "65645f7461626c657318012001280822490a104c69737453696e6b735265" .
            "7175657374120e0a06706172656e7418012001280912120a0a706167655f" .
            "746f6b656e18022001280912110a09706167655f73697a65180320012805" .
            "22570a114c69737453696e6b73526573706f6e736512290a0573696e6b73" .
            "18012003280b321a2e676f6f676c652e6c6f6767696e672e76322e4c6f67" .
            "53696e6b12170a0f6e6578745f706167655f746f6b656e18022001280922" .
            "230a0e47657453696e6b5265717565737412110a0973696e6b5f6e616d65" .
            "180120012809226d0a1143726561746553696e6b52657175657374120e0a" .
            "06706172656e7418012001280912280a0473696e6b18022001280b321a2e" .
            "676f6f676c652e6c6f6767696e672e76322e4c6f6753696e6b121e0a1675" .
            "6e697175655f7772697465725f6964656e7469747918032001280822a101" .
            "0a1155706461746553696e6b5265717565737412110a0973696e6b5f6e61" .
            "6d6518012001280912280a0473696e6b18022001280b321a2e676f6f676c" .
            "652e6c6f6767696e672e76322e4c6f6753696e6b121e0a16756e69717565" .
            "5f7772697465725f6964656e74697479180320012808122f0a0b75706461" .
            "74655f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275" .
            "662e4669656c644d61736b22260a1144656c65746553696e6b5265717565" .
            "737412110a0973696e6b5f6e616d6518012001280922b5010a0c4c6f6745" .
            "78636c7573696f6e120c0a046e616d6518012001280912130a0b64657363" .
            "72697074696f6e180220012809120e0a0666696c74657218032001280912" .
            "100a0864697361626c6564180420012808122f0a0b6372656174655f7469" .
            "6d6518052001280b321a2e676f6f676c652e70726f746f6275662e54696d" .
            "657374616d70122f0a0b7570646174655f74696d6518062001280b321a2e" .
            "676f6f676c652e70726f746f6275662e54696d657374616d70224e0a154c" .
            "6973744578636c7573696f6e7352657175657374120e0a06706172656e74" .
            "18012001280912120a0a706167655f746f6b656e18022001280912110a09" .
            "706167655f73697a6518032001280522660a164c6973744578636c757369" .
            "6f6e73526573706f6e736512330a0a6578636c7573696f6e731801200328" .
            "0b321f2e676f6f676c652e6c6f6767696e672e76322e4c6f674578636c75" .
            "73696f6e12170a0f6e6578745f706167655f746f6b656e18022001280922" .
            "230a134765744578636c7573696f6e52657175657374120c0a046e616d65" .
            "180120012809225c0a164372656174654578636c7573696f6e5265717565" .
            "7374120e0a06706172656e7418012001280912320a096578636c7573696f" .
            "6e18022001280b321f2e676f6f676c652e6c6f6767696e672e76322e4c6f" .
            "674578636c7573696f6e228b010a165570646174654578636c7573696f6e" .
            "52657175657374120c0a046e616d6518012001280912320a096578636c75" .
            "73696f6e18022001280b321f2e676f6f676c652e6c6f6767696e672e7632" .
            "2e4c6f674578636c7573696f6e122f0a0b7570646174655f6d61736b1803" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61" .
            "736b22260a1644656c6574654578636c7573696f6e52657175657374120c" .
            "0a046e616d6518012001280932f61a0a0f436f6e66696753657276696365" .
            "56321287020a094c69737453696e6b7312232e676f6f676c652e6c6f6767" .
            "696e672e76322e4c69737453696e6b73526571756573741a242e676f6f67" .
            "6c652e6c6f6767696e672e76322e4c69737453696e6b73526573706f6e73" .
            "6522ae0182d3e49302a70112162f76322f7b706172656e743d2a2f2a7d2f" .
            "73696e6b735a1f121d2f76322f7b706172656e743d70726f6a656374732f" .
            "2a7d2f73696e6b735a2412222f76322f7b706172656e743d6f7267616e69" .
            "7a6174696f6e732f2a7d2f73696e6b735a1e121c2f76322f7b706172656e" .
            "743d666f6c646572732f2a7d2f73696e6b735a2612242f76322f7b706172" .
            "656e743d62696c6c696e674163636f756e74732f2a7d2f73696e6b731292" .
            "020a0747657453696e6b12212e676f6f676c652e6c6f6767696e672e7632" .
            "2e47657453696e6b526571756573741a1a2e676f6f676c652e6c6f676769" .
            "6e672e76322e4c6f6753696e6b22c70182d3e49302c001121b2f76322f7b" .
            "73696e6b5f6e616d653d2a2f2a2f73696e6b732f2a7d5a2412222f76322f" .
            "7b73696e6b5f6e616d653d70726f6a656374732f2a2f73696e6b732f2a7d" .
            "5a2912272f76322f7b73696e6b5f6e616d653d6f7267616e697a6174696f" .
            "6e732f2a2f73696e6b732f2a7d5a2312212f76322f7b73696e6b5f6e616d" .
            "653d666f6c646572732f2a2f73696e6b732f2a7d5a2b12292f76322f7b73" .
            "696e6b5f6e616d653d62696c6c696e674163636f756e74732f2a2f73696e" .
            "6b732f2a7d129d020a0a43726561746553696e6b12242e676f6f676c652e" .
            "6c6f6767696e672e76322e43726561746553696e6b526571756573741a1a" .
            "2e676f6f676c652e6c6f6767696e672e76322e4c6f6753696e6b22cc0182" .
            "d3e49302c50122162f76322f7b706172656e743d2a2f2a7d2f73696e6b73" .
            "3a0473696e6b5a25221d2f76322f7b706172656e743d70726f6a65637473" .
            "2f2a7d2f73696e6b733a0473696e6b5a2a22222f76322f7b706172656e74" .
            "3d6f7267616e697a6174696f6e732f2a7d2f73696e6b733a0473696e6b5a" .
            "24221c2f76322f7b706172656e743d666f6c646572732f2a7d2f73696e6b" .
            "733a0473696e6b5a2c22242f76322f7b706172656e743d62696c6c696e67" .
            "4163636f756e74732f2a7d2f73696e6b733a0473696e6b12f1030a0a5570" .
            "6461746553696e6b12242e676f6f676c652e6c6f6767696e672e76322e55" .
            "706461746553696e6b526571756573741a1a2e676f6f676c652e6c6f6767" .
            "696e672e76322e4c6f6753696e6b22a00382d3e4930299031a1b2f76322f" .
            "7b73696e6b5f6e616d653d2a2f2a2f73696e6b732f2a7d3a0473696e6b5a" .
            "2a1a222f76322f7b73696e6b5f6e616d653d70726f6a656374732f2a2f73" .
            "696e6b732f2a7d3a0473696e6b5a2f1a272f76322f7b73696e6b5f6e616d" .
            "653d6f7267616e697a6174696f6e732f2a2f73696e6b732f2a7d3a047369" .
            "6e6b5a291a212f76322f7b73696e6b5f6e616d653d666f6c646572732f2a" .
            "2f73696e6b732f2a7d3a0473696e6b5a311a292f76322f7b73696e6b5f6e" .
            "616d653d62696c6c696e674163636f756e74732f2a2f73696e6b732f2a7d" .
            "3a0473696e6b5a2a32222f76322f7b73696e6b5f6e616d653d70726f6a65" .
            "6374732f2a2f73696e6b732f2a7d3a0473696e6b5a2f32272f76322f7b73" .
            "696e6b5f6e616d653d6f7267616e697a6174696f6e732f2a2f73696e6b73" .
            "2f2a7d3a0473696e6b5a2932212f76322f7b73696e6b5f6e616d653d666f" .
            "6c646572732f2a2f73696e6b732f2a7d3a0473696e6b5a3132292f76322f" .
            "7b73696e6b5f6e616d653d62696c6c696e674163636f756e74732f2a2f73" .
            "696e6b732f2a7d3a0473696e6b1294020a0a44656c65746553696e6b1224" .
            "2e676f6f676c652e6c6f6767696e672e76322e44656c65746553696e6b52" .
            "6571756573741a162e676f6f676c652e70726f746f6275662e456d707479" .
            "22c70182d3e49302c0012a1b2f76322f7b73696e6b5f6e616d653d2a2f2a" .
            "2f73696e6b732f2a7d5a242a222f76322f7b73696e6b5f6e616d653d7072" .
            "6f6a656374732f2a2f73696e6b732f2a7d5a292a272f76322f7b73696e6b" .
            "5f6e616d653d6f7267616e697a6174696f6e732f2a2f73696e6b732f2a7d" .
            "5a232a212f76322f7b73696e6b5f6e616d653d666f6c646572732f2a2f73" .
            "696e6b732f2a7d5a2b2a292f76322f7b73696e6b5f6e616d653d62696c6c" .
            "696e674163636f756e74732f2a2f73696e6b732f2a7d12af020a0e4c6973" .
            "744578636c7573696f6e7312282e676f6f676c652e6c6f6767696e672e76" .
            "322e4c6973744578636c7573696f6e73526571756573741a292e676f6f67" .
            "6c652e6c6f6767696e672e76322e4c6973744578636c7573696f6e735265" .
            "73706f6e736522c70182d3e49302c001121b2f76322f7b706172656e743d" .
            "2a2f2a7d2f6578636c7573696f6e735a2412222f76322f7b706172656e74" .
            "3d70726f6a656374732f2a7d2f6578636c7573696f6e735a2912272f7632" .
            "2f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f6578636c" .
            "7573696f6e735a2312212f76322f7b706172656e743d666f6c646572732f" .
            "2a7d2f6578636c7573696f6e735a2b12292f76322f7b706172656e743d62" .
            "696c6c696e674163636f756e74732f2a7d2f6578636c7573696f6e7312a1" .
            "020a0c4765744578636c7573696f6e12262e676f6f676c652e6c6f676769" .
            "6e672e76322e4765744578636c7573696f6e526571756573741a1f2e676f" .
            "6f676c652e6c6f6767696e672e76322e4c6f674578636c7573696f6e22c7" .
            "0182d3e49302c001121b2f76322f7b6e616d653d2a2f2a2f6578636c7573" .
            "696f6e732f2a7d5a2412222f76322f7b6e616d653d70726f6a656374732f" .
            "2a2f6578636c7573696f6e732f2a7d5a2912272f76322f7b6e616d653d6f" .
            "7267616e697a6174696f6e732f2a2f6578636c7573696f6e732f2a7d5a23" .
            "12212f76322f7b6e616d653d666f6c646572732f2a2f6578636c7573696f" .
            "6e732f2a7d5a2b12292f76322f7b6e616d653d62696c6c696e674163636f" .
            "756e74732f2a2f6578636c7573696f6e732f2a7d12de020a0f4372656174" .
            "654578636c7573696f6e12292e676f6f676c652e6c6f6767696e672e7632" .
            "2e4372656174654578636c7573696f6e526571756573741a1f2e676f6f67" .
            "6c652e6c6f6767696e672e76322e4c6f674578636c7573696f6e22fe0182" .
            "d3e49302f701221b2f76322f7b706172656e743d2a2f2a7d2f6578636c75" .
            "73696f6e733a096578636c7573696f6e5a2f22222f76322f7b706172656e" .
            "743d70726f6a656374732f2a7d2f6578636c7573696f6e733a096578636c" .
            "7573696f6e5a3422272f76322f7b706172656e743d6f7267616e697a6174" .
            "696f6e732f2a7d2f6578636c7573696f6e733a096578636c7573696f6e5a" .
            "2e22212f76322f7b706172656e743d666f6c646572732f2a7d2f6578636c" .
            "7573696f6e733a096578636c7573696f6e5a3622292f76322f7b70617265" .
            "6e743d62696c6c696e674163636f756e74732f2a7d2f6578636c7573696f" .
            "6e733a096578636c7573696f6e12de020a0f5570646174654578636c7573" .
            "696f6e12292e676f6f676c652e6c6f6767696e672e76322e557064617465" .
            "4578636c7573696f6e526571756573741a1f2e676f6f676c652e6c6f6767" .
            "696e672e76322e4c6f674578636c7573696f6e22fe0182d3e49302f70132" .
            "1b2f76322f7b6e616d653d2a2f2a2f6578636c7573696f6e732f2a7d3a09" .
            "6578636c7573696f6e5a2f32222f76322f7b6e616d653d70726f6a656374" .
            "732f2a2f6578636c7573696f6e732f2a7d3a096578636c7573696f6e5a34" .
            "32272f76322f7b6e616d653d6f7267616e697a6174696f6e732f2a2f6578" .
            "636c7573696f6e732f2a7d3a096578636c7573696f6e5a2e32212f76322f" .
            "7b6e616d653d666f6c646572732f2a2f6578636c7573696f6e732f2a7d3a" .
            "096578636c7573696f6e5a3632292f76322f7b6e616d653d62696c6c696e" .
            "674163636f756e74732f2a2f6578636c7573696f6e732f2a7d3a09657863" .
            "6c7573696f6e129e020a0f44656c6574654578636c7573696f6e12292e67" .
            "6f6f676c652e6c6f6767696e672e76322e44656c6574654578636c757369" .
            "6f6e526571756573741a162e676f6f676c652e70726f746f6275662e456d" .
            "70747922c70182d3e49302c0012a1b2f76322f7b6e616d653d2a2f2a2f65" .
            "78636c7573696f6e732f2a7d5a242a222f76322f7b6e616d653d70726f6a" .
            "656374732f2a2f6578636c7573696f6e732f2a7d5a292a272f76322f7b6e" .
            "616d653d6f7267616e697a6174696f6e732f2a2f6578636c7573696f6e73" .
            "2f2a7d5a232a212f76322f7b6e616d653d666f6c646572732f2a2f657863" .
            "6c7573696f6e732f2a7d5a2b2a292f76322f7b6e616d653d62696c6c696e" .
            "674163636f756e74732f2a2f6578636c7573696f6e732f2a7d1adf01ca41" .
            "166c6f6767696e672e676f6f676c65617069732e636f6dd241c201687474" .
            "70733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f63" .
            "6c6f75642d706c6174666f726d2c68747470733a2f2f7777772e676f6f67" .
            "6c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d" .
            "2e726561642d6f6e6c792c68747470733a2f2f7777772e676f6f676c6561" .
            "7069732e636f6d2f617574682f6c6f6767696e672e61646d696e2c687474" .
            "70733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f6c" .
            "6f6767696e672e72656164429e010a15636f6d2e676f6f676c652e6c6f67" .
            "67696e672e763242124c6f6767696e67436f6e66696750726f746f50015a" .
            "38676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f" .
            "6f676c65617069732f6c6f6767696e672f76323b6c6f6767696e67f80101" .
            "aa0217476f6f676c652e436c6f75642e4c6f6767696e672e5632ca021747" .
            "6f6f676c655c436c6f75645c4c6f6767696e675c5632620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

